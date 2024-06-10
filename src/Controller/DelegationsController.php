<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Delegations Controller
 *
 * @property \App\Model\Table\DelegationsTable $Delegations
 * @method \App\Model\Entity\Delegation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DelegationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $delegations = $this->paginate($this->Delegations);

        $this->set(compact('delegations'));
    }

    /**
     * View method
     *
     * @param string|null $id Delegation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $delegation = $this->Delegations->get($id, [
            'contain' => ['Clients'],
        ]);

        $this->set(compact('delegation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $delegation = $this->Delegations->newEmptyEntity();
        if ($this->request->is('post')) {
            $delegation = $this->Delegations->patchEntity($delegation, $this->request->getData());
            if ($this->Delegations->save($delegation)) {
                $this->Flash->success(__('The delegation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The delegation could not be saved. Please, try again.'));
        }
        $this->set(compact('delegation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Delegation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $delegation = $this->Delegations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $delegation = $this->Delegations->patchEntity($delegation, $this->request->getData());
            if ($this->Delegations->save($delegation)) {
                $this->Flash->success(__('The delegation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The delegation could not be saved. Please, try again.'));
        }
        $this->set(compact('delegation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Delegation id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $delegation = $this->Delegations->get($id);
        if ($this->Delegations->delete($delegation)) {
            $this->Flash->success(__('The delegation has been deleted.'));
        } else {
            $this->Flash->error(__('The delegation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
