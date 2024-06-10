<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pfinals Controller
 *
 * @property \App\Model\Table\PfinalsTable $Pfinals
 * @method \App\Model\Entity\Pfinal[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PfinalsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Souscategories', 'Categories'],
        ];
        $pfinals = $this->paginate($this->Pfinals);

        $this->set(compact('pfinals'));
    }

    /**
     * View method
     *
     * @param string|null $id Pfinal id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pfinal = $this->Pfinals->get($id, [
            'contain' => ['Souscategories', 'Categories'],
        ]);

        $this->set(compact('pfinal'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pfinal = $this->Pfinals->newEmptyEntity();
        if ($this->request->is('post')) {
            $pfinal = $this->Pfinals->patchEntity($pfinal, $this->request->getData());
            if ($this->Pfinals->save($pfinal)) {
                if (isset($this->request->getData('data')['ligne']) && (!empty($this->request->getData('data')['ligne']))) {
                    foreach ($this->request->getData('data')['ligne'] as $i => $per) {
//debug($per['sup']);
                        if ($per['sup'] != 1) {
                            $data2['$pfinal_id'] = $pfinal->id;
                            $data2['article_id'] = $per['article_id'];
                            $data2['descr'] = $per['descr'];
                            $ligne2 = $this->fetchTable('Lignemalus')->newEmptyEntity();
                            $ligne2 = $this->fetchTable('Lignemalus')->patchEntity($ligne2, $data2);
                            if ($this->fetchTable('Lignemalus')->save($ligne2)) {
// debug($this->request->getData('data')['ligne']);
// debug($ligne2);
                            } else {
                            }
                        }
                    }
                }

                $this->Flash->success(__('The pfinal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pfinal could not be saved. Please, try again.'));
        }
        $souscategories = $this->Pfinals->Souscategories->find('list', ['limit' => 200])->all();
        $categories = $this->Pfinals->Categories->find('list', ['limit' => 200])->all();

        $this->set(compact('pfinal', 'souscategories', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pfinal id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pfinal = $this->Pfinals->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pfinal = $this->Pfinals->patchEntity($pfinal, $this->request->getData());
            if ($this->Pfinals->save($pfinal)) {
                $this->Flash->success(__('The pfinal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pfinal could not be saved. Please, try again.'));
        }
        $souscategories = $this->Pfinals->Souscategories->find('list', ['limit' => 200])->all();
        $categories = $this->Pfinals->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('pfinal', 'souscategories', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pfinal id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pfinal = $this->Pfinals->get($id);
        if ($this->Pfinals->delete($pfinal)) {
            $this->Flash->success(__('The pfinal has been deleted.'));
        } else {
            $this->Flash->error(__('The pfinal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
