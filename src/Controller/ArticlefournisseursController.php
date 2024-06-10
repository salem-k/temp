<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Articlefournisseurs Controller
 *
 * @property \App\Model\Table\ArticlefournisseursTable $Articlefournisseurs
 * @method \App\Model\Entity\Articlefournisseur[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticlefournisseursController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fournisseurs', 'Articles'],
        ];
        $articlefournisseurs = $this->paginate($this->Articlefournisseurs);

        $this->set(compact('articlefournisseurs'));
    }

    /**
     * View method
     *
     * @param string|null $id Articlefournisseur id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $articlefournisseur = $this->Articlefournisseurs->get($id, [
            'contain' => ['Fournisseurs', 'Articles'],
        ]);

        $this->set(compact('articlefournisseur'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $articlefournisseur = $this->Articlefournisseurs->newEmptyEntity();
        if ($this->request->is('post')) {
            $articlefournisseur = $this->Articlefournisseurs->patchEntity($articlefournisseur, $this->request->getData());
            if ($this->Articlefournisseurs->save($articlefournisseur)) {
                $this->Flash->success(__('The articlefournisseur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articlefournisseur could not be saved. Please, try again.'));
        }
        $fournisseurs = $this->Articlefournisseurs->Fournisseurs->find('list', ['limit' => 200])->all();
        $articles = $this->Articlefournisseurs->Articles->find('list', ['limit' => 200])->all();
        $this->set(compact('articlefournisseur', 'fournisseurs', 'articles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Articlefournisseur id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $articlefournisseur = $this->Articlefournisseurs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $articlefournisseur = $this->Articlefournisseurs->patchEntity($articlefournisseur, $this->request->getData());
            if ($this->Articlefournisseurs->save($articlefournisseur)) {
                $this->Flash->success(__('The articlefournisseur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articlefournisseur could not be saved. Please, try again.'));
        }
        $fournisseurs = $this->Articlefournisseurs->Fournisseurs->find('list', ['limit' => 200])->all();
        $articles = $this->Articlefournisseurs->Articles->find('list', ['limit' => 200])->all();
        $this->set(compact('articlefournisseur', 'fournisseurs', 'articles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Articlefournisseur id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $articlefournisseur = $this->Articlefournisseurs->get($id);
        if ($this->Articlefournisseurs->delete($articlefournisseur)) {
            $this->Flash->success(__('The articlefournisseur has been deleted.'));
        } else {
            $this->Flash->error(__('The articlefournisseur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
