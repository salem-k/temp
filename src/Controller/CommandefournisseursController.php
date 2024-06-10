<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Commandefournisseurs Controller
 *
 * @property \App\Model\Table\CommandefournisseursTable $Commandefournisseurs
 * @method \App\Model\Entity\Commandefournisseur[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommandefournisseursController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Demandeoffredeprixes', 'Fournisseurs', 'Pointdeventes', 'Depots', 'Factures'],
        ];
        $commandefournisseurs = $this->paginate($this->Commandefournisseurs);

        $this->set(compact('commandefournisseurs'));
    }

    /**
     * View method
     *
     * @param string|null $id Commandefournisseur id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $commandefournisseur = $this->Commandefournisseurs->get($id, [
            'contain' => ['Demandeoffredeprixes', 'Fournisseurs', 'Pointdeventes', 'Depots', 'Factures', 'Livraisons'],
        ]);

        $this->set(compact('commandefournisseur'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $commandefournisseur = $this->Commandefournisseurs->newEmptyEntity();
        if ($this->request->is('post')) {
            $commandefournisseur = $this->Commandefournisseurs->patchEntity($commandefournisseur, $this->request->getData());
            if ($this->Commandefournisseurs->save($commandefournisseur)) {
                $this->Flash->success(__('The commandefournisseur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commandefournisseur could not be saved. Please, try again.'));
        }
        $demandeoffredeprixes = $this->Commandefournisseurs->Demandeoffredeprixes->find('list', ['limit' => 200])->all();
        $fournisseurs = $this->Commandefournisseurs->Fournisseurs->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Commandefournisseurs->Pointdeventes->find('list', ['limit' => 200])->all();
        $depots = $this->Commandefournisseurs->Depots->find('list', ['limit' => 200])->all();
        $factures = $this->Commandefournisseurs->Factures->find('list', ['limit' => 200])->all();
        $this->set(compact('commandefournisseur', 'demandeoffredeprixes', 'fournisseurs', 'pointdeventes', 'depots', 'factures'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Commandefournisseur id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $commandefournisseur = $this->Commandefournisseurs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commandefournisseur = $this->Commandefournisseurs->patchEntity($commandefournisseur, $this->request->getData());
            if ($this->Commandefournisseurs->save($commandefournisseur)) {
                $this->Flash->success(__('The commandefournisseur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commandefournisseur could not be saved. Please, try again.'));
        }
        $demandeoffredeprixes = $this->Commandefournisseurs->Demandeoffredeprixes->find('list', ['limit' => 200])->all();
        $fournisseurs = $this->Commandefournisseurs->Fournisseurs->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Commandefournisseurs->Pointdeventes->find('list', ['limit' => 200])->all();
        $depots = $this->Commandefournisseurs->Depots->find('list', ['limit' => 200])->all();
        $factures = $this->Commandefournisseurs->Factures->find('list', ['limit' => 200])->all();
        $this->set(compact('commandefournisseur', 'demandeoffredeprixes', 'fournisseurs', 'pointdeventes', 'depots', 'factures'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Commandefournisseur id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $commandefournisseur = $this->Commandefournisseurs->get($id);
        if ($this->Commandefournisseurs->delete($commandefournisseur)) {
            $this->Flash->success(__('The commandefournisseur has been deleted.'));
        } else {
            $this->Flash->error(__('The commandefournisseur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
