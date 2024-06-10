<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Banques Controller
 *
 * @property \App\Model\Table\BanquesTable $Banques
 * @method \App\Model\Entity\Banque[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BanquesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Devises'],
        ];
        $banques = $this->paginate($this->Banques);

        $this->set(compact('banques'));
    }

    /**
     * View method
     *
     * @param string|null $id Banque id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $banque = $this->Banques->get($id, [
            'contain' => ['Devises'],
        ]);

        $this->set(compact('banque'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $banque = $this->Banques->newEmptyEntity();
        if ($this->request->is('post')) {
            $banque = $this->Banques->patchEntity($banque, $this->request->getData());
            if ($this->Banques->save($banque)) {
                $this->Flash->success(__('The banque has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banque could not be saved. Please, try again.'));
        }
        $devises = $this->Banques->Devises->find('list', ['limit' => 200])->all();
        $this->set(compact('banque', 'devises'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Banque id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $banque = $this->Banques->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $banque = $this->Banques->patchEntity($banque, $this->request->getData());
            if ($this->Banques->save($banque)) {
                $this->Flash->success(__('The banque has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banque could not be saved. Please, try again.'));
        }
        $devises = $this->Banques->Devises->find('list', ['limit' => 200])->all();
        $this->set(compact('banque', 'devises'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Banque id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $banque = $this->Banques->get($id);
        if ($this->Banques->delete($banque)) {
            $this->Flash->success(__('The banque has been deleted.'));
        } else {
            $this->Flash->error(__('The banque could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
