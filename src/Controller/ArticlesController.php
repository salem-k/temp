<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{
  /**
   * Index method
   *
   * @return \Cake\Http\Response|null|void Renders view
   */
  public function index()
  {
    $cond1 = '';
    $cond2 = '';
    $cond3 = '';
    $Reffourni = $this->request->getQuery('Reffourni');
    $Dsignation = $this->request->getQuery('Dsignation');
    $Refggb = $this->request->getQuery('Refggb');
    if ($Reffourni) {
      $cond1 = 'Articles.Reffourni  ="' . $Reffourni . '"';
    }
    if ($Dsignation) {
      $cond2 = 'Articles.Dsignation  ="' . $Dsignation . '"';
    }
    if ($Refggb) {
      $cond3 = 'Articles.Refggb  ="' . $Refggb . '"';
    }
    $query = $this->Articles->find('all')->where([$cond1, $cond2, $cond3]);
    $this->paginate = [
      'contain' => ['Souscategories'],
    ];
    $articles = $this->paginate($query);
    // $articles = $this->paginate($this->Articles);

    $this->set(compact('articles'));
  }

  /*imprimer*/

  public function imprimer($id = null)
  {
      $article = $this->Articles->get($id, [
          'contain' => ['Souscategories'],
      ]);
      $this->loadModel('Pays');
      $this->loadModel('Unites');
      $this->loadModel('Categories');
      $this->loadModel('Tvas');
      $this->loadModel('Codecomptables');
      $codecomptableventes = $this->fetchTable('Codecomptables')->find('list', ['keyfield' => 'id', 'valueField' => 'name'])->where('Codecomptables.typecode = 1');
      $codecomptableexports = $this->fetchTable('Codecomptables')->find('list', ['keyfield' => 'id', 'valueField' => 'name'])->where('Codecomptables.typecode = 2');
      $codecomptableachats = $this->fetchTable('Codecomptables')->find('list', ['keyfield' => 'id', 'valueField' => 'name'])->where('Codecomptables.typecode = 3');
      $tvas = $this->fetchTable('Tvas')->find('list', ['keyfield' => 'id', 'valueField' => 'valeur']);
      $categories = $this->fetchTable('Categories')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
      $unites = $this->fetchTable('Unites')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
      $pays = $this->fetchTable('Pays')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
      $this->loadModel('Typearticles');
     $depot=$this->fetchTable('Depots')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
    $typearticles = $this->fetchTable('Typearticles')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
    //dd($pays);
    $souscategories = $this->Articles->Souscategories->find('list', ['limit' => 200])->all();
    $this->set(compact('article','depot', 'codecomptableventes', 'codecomptableexports', 'codecomptableachats', 'tvas', 'unites', 'pays', 'categories', 'typearticles', 'souscategories'));

  }
  /**
   * View method
   *
   * @param string|null $id Article id.
   * @return \Cake\Http\Response|null|void Renders view
   * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
   */
  public function view($id = null)
  {
    $article = $this->Articles->get($id, [
      'contain' => ['Souscategories'],
    ]);
    $this->loadModel('Pays');
    $this->loadModel('Unites');
    $this->loadModel('Categories');
    $this->loadModel('Tvas');
    $this->loadModel('Codecomptables');
    $this->loadModel('Fournisseurs');
    $this->loadModel('Articlefournisseurs');
    $lignes = $this->fetchTable('Articlefournisseurs')->find('all')->where('Articlefournisseurs.article_id =' . $id);
    //dd($lignes);
    $fournisseurs = $this->fetchTable('Fournisseurs')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);

    $codecomptableventes = $this->fetchTable('Codecomptables')->find('list', ['keyfield' => 'id', 'valueField' => 'name'])->where('Codecomptables.typecode = 1');
    $codecomptableexports = $this->fetchTable('Codecomptables')->find('list', ['keyfield' => 'id', 'valueField' => 'name'])->where('Codecomptables.typecode = 2');
    $codecomptableachats = $this->fetchTable('Codecomptables')->find('list', ['keyfield' => 'id', 'valueField' => 'name'])->where('Codecomptables.typecode = 3');
    $tvas = $this->fetchTable('Tvas')->find('list', ['keyfield' => 'id', 'valueField' => 'valeur']);
    $categories = $this->fetchTable('Categories')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
    $unites = $this->fetchTable('Unites')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
    $pays = $this->fetchTable('Pays')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
    $this->loadModel('Typearticles');
    $typearticles = $this->fetchTable('Typearticles')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
    //dd($pays);
    $souscategories = $this->Articles->Souscategories->find('list', ['limit' => 200])->all();
    $this->set(compact('article', 'lignes', 'fournisseurs', 'codecomptableventes', 'codecomptableexports', 'codecomptableachats', 'tvas', 'unites', 'pays', 'categories', 'typearticles', 'souscategories'));

    //$this->set(compact('article'));
  }

  /**
   * Add method
   *
   * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
   */
  public function add()
  {
    $article = $this->Articles->newEmptyEntity();
    if ($this->request->is('post')) {
      // dd($this->request->getData());
      $article = $this->Articles->patchEntity($article, $this->request->getData());
      if ($this->Articles->save($article)) {
        $id = $article->id;
        if (!empty($this->request->getData('data')['lignef']) && isset($this->request->getData('data')['lignef'])) {
          foreach ($this->request->getData('data')['lignef'] as $lignefou) {
            if ($lignefou['sup1'] != 1) {
              $this->loadModel('Articlefournisseurs');
              $articlefournisseurs = $this->fetchTable('Articlefournisseurs')->newEmptyEntity();
              $data['article_id'] = $id;
              $data['fournisseur_id'] = $lignefou['fournisseur_id'];
              $data['prix'] = $lignefou['prix'];
              $articlefournisseurs = $this->Articlefournisseurs->patchEntity($articlefournisseurs, $data);
              if ($this->Articlefournisseurs->save($articlefournisseurs)) {

              }

            }
            // dd($lignefou);
          }
        }
        return $this->redirect(['action' => 'index']);
      }
      //$this->Flash->error(__('The article could not be saved. Please, try again.'));
    }
    $this->loadModel('Pays');
    $this->loadModel('Unites');
    $this->loadModel('Categories');
    $this->loadModel('Tvas');
    $this->loadModel('Codecomptables');
    $codecomptableventes = $this->fetchTable('Codecomptables')->find('list', ['keyfield' => 'id', 'valueField' => 'name'])->where('Codecomptables.typecode = 1');
    $codecomptableexports = $this->fetchTable('Codecomptables')->find('list', ['keyfield' => 'id', 'valueField' => 'name'])->where('Codecomptables.typecode = 2');
    $codecomptableachats = $this->fetchTable('Codecomptables')->find('list', ['keyfield' => 'id', 'valueField' => 'name'])->where('Codecomptables.typecode = 3');
    $tvas = $this->fetchTable('Tvas')->find('list', ['keyfield' => 'id', 'valueField' => 'valeur']);
    $categories = $this->fetchTable('Categories')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
    $unites = $this->fetchTable('Unites')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
    $pays = $this->fetchTable('Pays')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
    $this->loadModel('Typearticles');
    $typearticles = $this->fetchTable('Typearticles')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);

    $this->loadModel('Fournisseurs');
    $fournisseurs = $this->fetchTable('Fournisseurs')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
    //dd($pays);
    $souscategories = $this->Articles->Souscategories->find('list', ['limit' => 200])->all();
    $this->set(compact('article', 'fournisseurs', 'codecomptableventes', 'codecomptableexports', 'codecomptableachats', 'tvas', 'unites', 'pays', 'categories', 'typearticles', 'souscategories'));
  }

  /**
   * Edit method
   *
   * @param string|null $id Article id.
   * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
   */
  public function edit($id = null)
  {
    $article = $this->Articles->get($id, [
      'contain' => [],
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $article = $this->Articles->patchEntity($article, $this->request->getData());
      if ($this->Articles->save($article)) {
        $this->Flash->success(__('The article has been saved.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('The article could not be saved. Please, try again.'));
    }
    $this->set(compact('article'));
  }

  /**
   * Delete method
   *
   * @param string|null $id Article id.
   * @return \Cake\Http\Response|null|void Redirects to index.
   * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
   */
  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $article = $this->Articles->get($id);
    if ($this->Articles->delete($article)) {
      $this->Flash->success(__('The article has been deleted.'));
    } else {
      $this->Flash->error(__('The article could not be deleted. Please, try again.'));
    }

    return $this->redirect(['action' => 'index']);
  }
}
