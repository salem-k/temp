<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Fournisseurs Controller
 *
 * @property \App\Model\Table\FournisseursTable $Fournisseurs
 * @method \App\Model\Entity\Fournisseur[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FournisseursController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Villes', 'Pays', 'Paiements', 'Delegations', 'Localites', 'Categories'],
        ];
        $fournisseurs = $this->paginate($this->Fournisseurs);

        $this->set(compact('fournisseurs'));
    }

    /**
     * View method
     *
     * @param string|null $id Fournisseur id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fournisseur = $this->Fournisseurs->get($id, [
            'contain' => ['Villes', 'Pays', 'Paiements', 'Delegations', 'Localites', 'Categories', 'Factures', 'Livraisons'],
        ]);

        $this->set(compact('fournisseur'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fournisseur = $this->Fournisseurs->newEmptyEntity();
        if ($this->request->is('post')) {
            $fournisseur = $this->Fournisseurs->patchEntity($fournisseur, $this->request->getData());
            if ($this->Fournisseurs->save($fournisseur)) {
                $this->Flash->success(__('The fournisseur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fournisseur could not be saved. Please, try again.'));
        }
        $villes = $this->Fournisseurs->Villes->find('list', ['limit' => 200])->all();
        $pays = $this->Fournisseurs->Pays->find('list', ['limit' => 200])->all();
        $paiements = $this->Fournisseurs->Paiements->find('list', ['limit' => 200])->all();
        $delegations = $this->Fournisseurs->Delegations->find('list', ['limit' => 200])->all();
        $localites = $this->Fournisseurs->Localites->find('list', ['limit' => 200])->all();
        $categories = $this->Fournisseurs->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('fournisseur', 'villes', 'pays', 'paiements', 'delegations', 'localites', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fournisseur id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fournisseur = $this->Fournisseurs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fournisseur = $this->Fournisseurs->patchEntity($fournisseur, $this->request->getData());
            if ($this->Fournisseurs->save($fournisseur)) {
                $this->Flash->success(__('The fournisseur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fournisseur could not be saved. Please, try again.'));
        }
        $villes = $this->Fournisseurs->Villes->find('list', ['limit' => 200])->all();
        $pays = $this->Fournisseurs->Pays->find('list', ['limit' => 200])->all();
        $paiements = $this->Fournisseurs->Paiements->find('list', ['limit' => 200])->all();
        $delegations = $this->Fournisseurs->Delegations->find('list', ['limit' => 200])->all();
        $localites = $this->Fournisseurs->Localites->find('list', ['limit' => 200])->all();
        $categories = $this->Fournisseurs->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('fournisseur', 'villes', 'pays', 'paiements', 'delegations', 'localites', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fournisseur id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fournisseur = $this->Fournisseurs->get($id);
        if ($this->Fournisseurs->delete($fournisseur)) {
            $this->Flash->success(__('The fournisseur has been deleted.'));
        } else {
            $this->Flash->error(__('The fournisseur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
