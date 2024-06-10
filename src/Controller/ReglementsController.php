<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Reglements Controller
 *
 * @property \App\Model\Table\ReglementsTable $Reglements
 * @method \App\Model\Entity\Reglement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReglementsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fournisseurs', 'Utilisateurs', 'Devises', 'Pointdeventes'],
        ];
        $reglements = $this->paginate($this->Reglements);

        $this->set(compact('reglements'));
    }

    /**
     * View method
     *
     * @param string|null $id Reglement id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reglement = $this->Reglements->get($id, [
            'contain' => ['Fournisseurs', 'Utilisateurs', 'Devises', 'Pointdeventes'],
        ]);

        $this->set(compact('reglement'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reglement = $this->Reglements->newEmptyEntity();
        if ($this->request->is('post')) {
            $reglement = $this->Reglements->patchEntity($reglement, $this->request->getData());
            if ($this->Reglements->save($reglement)) {
                $this->Flash->success(__('The reglement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reglement could not be saved. Please, try again.'));
        }
        $fournisseurs = $this->Reglements->Fournisseurs->find('list', ['limit' => 200])->all();
        $utilisateurs = $this->Reglements->Utilisateurs->find('list', ['limit' => 200])->all();
        $devises = $this->Reglements->Devises->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Reglements->Pointdeventes->find('list', ['limit' => 200])->all();
        $this->set(compact('reglement', 'fournisseurs', 'utilisateurs', 'devises', 'pointdeventes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reglement id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reglement = $this->Reglements->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reglement = $this->Reglements->patchEntity($reglement, $this->request->getData());
            if ($this->Reglements->save($reglement)) {
                $this->Flash->success(__('The reglement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reglement could not be saved. Please, try again.'));
        }
        $fournisseurs = $this->Reglements->Fournisseurs->find('list', ['limit' => 200])->all();
        $utilisateurs = $this->Reglements->Utilisateurs->find('list', ['limit' => 200])->all();
        $devises = $this->Reglements->Devises->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Reglements->Pointdeventes->find('list', ['limit' => 200])->all();
        $this->set(compact('reglement', 'fournisseurs', 'utilisateurs', 'devises', 'pointdeventes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reglement id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reglement = $this->Reglements->get($id);
        if ($this->Reglements->delete($reglement)) {
            $this->Flash->success(__('The reglement has been deleted.'));
        } else {
            $this->Flash->error(__('The reglement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
