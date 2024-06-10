<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Clients Controller
 *
 * @property \App\Model\Table\ClientsTable $Clients
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Commercials', 'Gouvernorats', 'Paiements', 'Typeclients', 'Pointdeventes', 'Localites', 'Delegations', 'Pays', 'Devises'],
        ];
        $clients = $this->paginate($this->Clients);

        $this->set(compact('clients'));
    }

    /**
     * View method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $client = $this->Clients->get($id, [
            'contain' => ['Commercials', 'Gouvernorats', 'Paiements', 'Typeclients', 'Pointdeventes', 'Localites', 'Delegations', 'Pays', 'Devises', 'Clients', 'Commandeclients', 'Commandes', 'Factremises', 'Factureavoirs', 'Factureclients', 'Factures', 'Reglementclients', 'Tags'],
        ]);

        $this->set(compact('client'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $client = $this->Clients->newEmptyEntity();
        if ($this->request->is('post')) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('The client has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client could not be saved. Please, try again.'));
        }
        $commercials = $this->Clients->Commercials->find('list', ['limit' => 200])->all();
        $gouvernorats = $this->Clients->Gouvernorats->find('list', ['limit' => 200])->all();
        $paiements = $this->Clients->Paiements->find('list', ['limit' => 200])->all();
        $typeclients = $this->Clients->Typeclients->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Clients->Pointdeventes->find('list', ['limit' => 200])->all();
        $localites = $this->Clients->Localites->find('list', ['limit' => 200])->all();
        $delegations = $this->Clients->Delegations->find('list', ['limit' => 200])->all();
        $pays = $this->Clients->Pays->find('list', ['limit' => 200])->all();
        $devises = $this->Clients->Devises->find('list', ['limit' => 200])->all();
        $this->set(compact('client', 'commercials', 'gouvernorats', 'paiements', 'typeclients', 'pointdeventes', 'localites', 'delegations', 'pays', 'devises'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $client = $this->Clients->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('The client has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client could not be saved. Please, try again.'));
        }
        $commercials = $this->Clients->Commercials->find('list', ['limit' => 200])->all();
        $gouvernorats = $this->Clients->Gouvernorats->find('list', ['limit' => 200])->all();
        $paiements = $this->Clients->Paiements->find('list', ['limit' => 200])->all();
        $typeclients = $this->Clients->Typeclients->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Clients->Pointdeventes->find('list', ['limit' => 200])->all();
        $localites = $this->Clients->Localites->find('list', ['limit' => 200])->all();
        $delegations = $this->Clients->Delegations->find('list', ['limit' => 200])->all();
        $pays = $this->Clients->Pays->find('list', ['limit' => 200])->all();
        $devises = $this->Clients->Devises->find('list', ['limit' => 200])->all();
        $this->set(compact('client', 'commercials', 'gouvernorats', 'paiements', 'typeclients', 'pointdeventes', 'localites', 'delegations', 'pays', 'devises'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $client = $this->Clients->get($id);
        if ($this->Clients->delete($client)) {
            $this->Flash->success(__('The client has been deleted.'));
        } else {
            $this->Flash->error(__('The client could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
