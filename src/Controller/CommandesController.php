<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Commandes Controller
 *
 * @property \App\Model\Table\CommandesTable $Commandes
 * @method \App\Model\Entity\Commande[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommandesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Commercials', 'Pointdeventes', 'Depots'],
        ];
        $commandes = $this->paginate($this->Commandes);

        $this->set(compact('commandes'));
    }

    /**
     * View method
     *
     * @param string|null $id Commande id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $commande = $this->Commandes->get($id, [
            'contain' => ['Clients', 'Commercials', 'Pointdeventes', 'Depots', 'Details'],
        ]);

        $this->set(compact('commande'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $commande = $this->Commandes->newEmptyEntity();
        if ($this->request->is('post')) {
            $commande = $this->Commandes->patchEntity($commande, $this->request->getData());
            if ($this->Commandes->save($commande)) {
                $this->Flash->success(__('The commande has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commande could not be saved. Please, try again.'));
        }
        $clients = $this->Commandes->Clients->find('list', ['limit' => 200])->all();
        $commercials = $this->Commandes->Commercials->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Commandes->Pointdeventes->find('list', ['limit' => 200])->all();
        $depots = $this->Commandes->Depots->find('list', ['limit' => 200])->all();
        $this->set(compact('commande', 'clients', 'commercials', 'pointdeventes', 'depots'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Commande id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $commande = $this->Commandes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commande = $this->Commandes->patchEntity($commande, $this->request->getData());
            if ($this->Commandes->save($commande)) {
                $this->Flash->success(__('The commande has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commande could not be saved. Please, try again.'));
        }
        $clients = $this->Commandes->Clients->find('list', ['limit' => 200])->all();
        $commercials = $this->Commandes->Commercials->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Commandes->Pointdeventes->find('list', ['limit' => 200])->all();
        $depots = $this->Commandes->Depots->find('list', ['limit' => 200])->all();
        $this->set(compact('commande', 'clients', 'commercials', 'pointdeventes', 'depots'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Commande id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $commande = $this->Commandes->get($id);
        if ($this->Commandes->delete($commande)) {
            $this->Flash->success(__('The commande has been deleted.'));
        } else {
            $this->Flash->error(__('The commande could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
