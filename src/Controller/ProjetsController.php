<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Projets Controller
 *
 * @property \App\Model\Table\ProjetsTable $Projets
 * @method \App\Model\Entity\Projet[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Commercials', 'Personnels', 'Devises', 'Banques'],
        ];
        $projets = $this->paginate($this->Projets);

        $this->set(compact('projets'));
    }

    /**
     * View method
     *
     * @param string|null $id Projet id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projet = $this->Projets->get($id, [
            'contain' => ['Clients', 'Commercials', 'Personnels', 'Devises', 'Banques', 'Commandefournisseurs', 'Demandeoffredeprixes', 'Factureclients', 'Factures', 'Reglementclients', 'Reglements', 'Taches'],
        ]);

        $this->set(compact('projet'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projet = $this->Projets->newEmptyEntity();
        if ($this->request->is('post')) {
            $projet = $this->Projets->patchEntity($projet, $this->request->getData());
            if ($this->Projets->save($projet)) {
                $this->Flash->success(__('The projet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projet could not be saved. Please, try again.'));
        }
        $clients = $this->Projets->Clients->find('list', ['limit' => 200])->all();
        $commercials = $this->Projets->Commercials->find('list', ['limit' => 200])->all();
        $personnels = $this->Projets->Personnels->find('list', ['limit' => 200])->all();
        $devises = $this->Projets->Devises->find('list', ['limit' => 200])->all();
        $banques = $this->Projets->Banques->find('list', ['limit' => 200])->all();
        $this->set(compact('projet', 'clients', 'commercials', 'personnels', 'devises', 'banques'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projet id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projet = $this->Projets->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projet = $this->Projets->patchEntity($projet, $this->request->getData());
            if ($this->Projets->save($projet)) {
                $this->Flash->success(__('The projet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projet could not be saved. Please, try again.'));
        }
        $clients = $this->Projets->Clients->find('list', ['limit' => 200])->all();
        $commercials = $this->Projets->Commercials->find('list', ['limit' => 200])->all();
        $personnels = $this->Projets->Personnels->find('list', ['limit' => 200])->all();
        $devises = $this->Projets->Devises->find('list', ['limit' => 200])->all();
        $banques = $this->Projets->Banques->find('list', ['limit' => 200])->all();
        $this->set(compact('projet', 'clients', 'commercials', 'personnels', 'devises', 'banques'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projet id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projet = $this->Projets->get($id);
        if ($this->Projets->delete($projet)) {
            $this->Flash->success(__('The projet has been deleted.'));
        } else {
            $this->Flash->error(__('The projet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
