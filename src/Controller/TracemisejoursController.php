<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tracemisejours Controller
 *
 * @property \App\Model\Table\TracemisejoursTable $Tracemisejours
 * @method \App\Model\Entity\Tracemisejour[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TracemisejoursController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Utilisateurs', 'Users'],
        ];
        $tracemisejours = $this->paginate($this->Tracemisejours);

        $this->set(compact('tracemisejours'));
    }

    /**
     * View method
     *
     * @param string|null $id Tracemisejour id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tracemisejour = $this->Tracemisejours->get($id, [
            'contain' => ['Utilisateurs', 'Users'],
        ]);

        $this->set(compact('tracemisejour'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tracemisejour = $this->Tracemisejours->newEmptyEntity();
        if ($this->request->is('post')) {
            $tracemisejour = $this->Tracemisejours->patchEntity($tracemisejour, $this->request->getData());
            if ($this->Tracemisejours->save($tracemisejour)) {
                $this->Flash->success(__('The tracemisejour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tracemisejour could not be saved. Please, try again.'));
        }
        $utilisateurs = $this->Tracemisejours->Utilisateurs->find('list', ['limit' => 200])->all();
        $users = $this->Tracemisejours->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('tracemisejour', 'utilisateurs', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tracemisejour id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tracemisejour = $this->Tracemisejours->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tracemisejour = $this->Tracemisejours->patchEntity($tracemisejour, $this->request->getData());
            if ($this->Tracemisejours->save($tracemisejour)) {
                $this->Flash->success(__('The tracemisejour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tracemisejour could not be saved. Please, try again.'));
        }
        $utilisateurs = $this->Tracemisejours->Utilisateurs->find('list', ['limit' => 200])->all();
        $users = $this->Tracemisejours->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('tracemisejour', 'utilisateurs', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tracemisejour id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tracemisejour = $this->Tracemisejours->get($id);
        if ($this->Tracemisejours->delete($tracemisejour)) {
            $this->Flash->success(__('The tracemisejour has been deleted.'));
        } else {
            $this->Flash->error(__('The tracemisejour could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
