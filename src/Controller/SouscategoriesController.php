<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Souscategories Controller
 *
 * @property \App\Model\Table\SouscategoriesTable $Souscategories
 * @method \App\Model\Entity\Souscategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SouscategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories'],
        ];
        $souscategories = $this->paginate($this->Souscategories);

        $this->set(compact('souscategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Souscategory id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $souscategory = $this->Souscategories->get($id, [
            'contain' => ['Categories'],
        ]);

        $this->set(compact('souscategory'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $souscategory = $this->Souscategories->newEmptyEntity();
        if ($this->request->is('post')) {
            $souscategory = $this->Souscategories->patchEntity($souscategory, $this->request->getData());
            if ($this->Souscategories->save($souscategory)) {
                $this->Flash->success(__('The souscategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The souscategory could not be saved. Please, try again.'));
        }
        $categories = $this->Souscategories->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('souscategory', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Souscategory id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $souscategory = $this->Souscategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $souscategory = $this->Souscategories->patchEntity($souscategory, $this->request->getData());
            if ($this->Souscategories->save($souscategory)) {
                $this->Flash->success(__('The souscategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The souscategory could not be saved. Please, try again.'));
        }
        $categories = $this->Souscategories->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('souscategory', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Souscategory id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $souscategory = $this->Souscategories->get($id);
        if ($this->Souscategories->delete($souscategory)) {
            $this->Flash->success(__('The souscategory has been deleted.'));
        } else {
            $this->Flash->error(__('The souscategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
