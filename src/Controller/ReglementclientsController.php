<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Reglementclients Controller
 *
 * @property \App\Model\Table\ReglementclientsTable $Reglementclients
 * @method \App\Model\Entity\Reglementclient[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReglementclientsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Pointdeventes', 'Utilisateurs'],
        ];
        $reglementclients = $this->paginate($this->Reglementclients);

        $this->set(compact('reglementclients'));
    }

    /**
     * View method
     *
     * @param string|null $id Reglementclient id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reglementclient = $this->Reglementclients->get($id, [
            'contain' => ['Clients', 'Pointdeventes', 'Utilisateurs'],
        ]);

        $this->set(compact('reglementclient'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reglementclient = $this->Reglementclients->newEmptyEntity();
        if ($this->request->is('post')) {
            $reglementclient = $this->Reglementclients->patchEntity($reglementclient, $this->request->getData());
            if ($this->Reglementclients->save($reglementclient)) {
                $this->Flash->success(__('The reglementclient has been saved.'));
    
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reglementclient could not be saved. Please, try again.'));
        }
    
        // Fetch clients with id as key and nom as value
        $clients = $this->Reglementclients->Clients->find('list', [
            'keyField' => 'id',
            'valueField' => 'nom'
        ])->toArray();
        $pointdeventes = $this->Reglementclients->Pointdeventes->find('list', ['limit' => 200])->all();
        $utilisateurs = $this->Reglementclients->Utilisateurs->find('list', ['limit' => 200])->all();
    
        $this->set(compact('reglementclient', 'clients', 'pointdeventes', 'utilisateurs'));
    }
    

    /**
     * Edit method
     *
     * @param string|null $id Reglementclient id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reglementclient = $this->Reglementclients->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reglementclient = $this->Reglementclients->patchEntity($reglementclient, $this->request->getData());
            if ($this->Reglementclients->save($reglementclient)) {
                $this->Flash->success(__('The reglementclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reglementclient could not be saved. Please, try again.'));
        }
        $clients = $this->Reglementclients->Clients->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Reglementclients->Pointdeventes->find('list', ['limit' => 200])->all();
        $utilisateurs = $this->Reglementclients->Utilisateurs->find('list', ['limit' => 200])->all();
        $this->set(compact('reglementclient', 'clients', 'pointdeventes', 'utilisateurs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reglementclient id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reglementclient = $this->Reglementclients->get($id);
        if ($this->Reglementclients->delete($reglementclient)) {
            $this->Flash->success(__('The reglementclient has been deleted.'));
        } else {
            $this->Flash->error(__('The reglementclient could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
