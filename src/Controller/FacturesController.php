<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Factures Controller
 *
 * @property \App\Model\Table\FacturesTable $Factures
 * @method \App\Model\Entity\Facture[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FacturesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pointdeventes', 'Depots', 'Paiements', 'Clients'],
        ];
        $factures = $this->paginate($this->Factures);

        $this->set(compact('factures'));
    }

    /**
     * View method
     *
     * @param string|null $id Facture id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $facture = $this->Factures->get($id, [
            'contain' => ['Pointdeventes', 'Depots', 'Paiements', 'Clients', 'Factavoirs','Fournisseurs'],
        ]);
        $facture = $this->paginate($this->Factures);

        $this->set(compact('facture'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
{
    $facture = $this->Factures->newEmptyEntity();
    if ($this->request->is('post')) {
        $facture = $this->Factures->patchEntity($facture, $this->request->getData());
        if ($this->Factures->save($facture)) {
            $this->Flash->success(__('The facture has been saved.'));

            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The facture could not be saved. Please, try again.'));
    }

    // Fetch clients with id as key and nom as value
    $clients = $this->Factures->Clients->find('list', [
        'keyField' => 'id',
        'valueField' => 'nom'
    ])->toArray();
    $pointdeventes = $this->Factures->Pointdeventes->find('list', ['limit' => 200])->all();
    $depots = $this->Factures->Depots->find('list', ['limit' => 200])->all();

    $paiements = $this->Factures->Paiements->find('list', ['limit' => 200])->all();
    $fournisseurs = $this->Factures->Fournisseurs->find('list', ['limit' => 200])->all();

    $this->set(compact('facture', 'pointdeventes', 'depots', 'paiements', 'clients','fournisseurs'));
}


    /**
     * Edit method
     *
     * @param string|null $id Facture id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $facture = $this->Factures->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $facture = $this->Factures->patchEntity($facture, $this->request->getData());
            if ($this->Factures->save($facture)) {
                $this->Flash->success(__('The facture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The facture could not be saved. Please, try again.'));
        }
        $pointdeventes = $this->Factures->Pointdeventes->find('list', ['limit' => 200])->all();
        $depots = $this->Factures->Depots->find('list', ['limit' => 200])->all();
        $paiements = $this->Factures->Paiements->find('list', ['limit' => 200])->all();
        $clients = $this->Factures->Clients->find('list', ['limit' => 200])->all();
        $this->set(compact('facture', 'pointdeventes', 'depots', 'paiements', 'clients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Facture id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $facture = $this->Factures->get($id);
        if ($this->Factures->delete($facture)) {
            $this->Flash->success(__('The facture has been deleted.'));
        } else {
            $this->Flash->error(__('The facture could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
