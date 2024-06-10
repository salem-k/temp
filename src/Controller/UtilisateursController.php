<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Utilisateurs Controller
 *
 * @property \App\Model\Table\UtilisateursTable $Utilisateurs
 * @method \App\Model\Entity\Utilisateur[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UtilisateursController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Personnels', 'Pointdeventes', 'Depots'],
        ];
        $utilisateurs = $this->paginate($this->Utilisateurs);

        $this->set(compact('utilisateurs'));
    }

    /**
     * View method
     *
     * @param string|null $id Utilisateur id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $utilisateur = $this->Utilisateurs->get($id, [
            'contain' => ['Personnels', 'Pointdeventes', 'Depots', 'Factureavoirs', 'Users', 'Utilisateurmenus'],
        ]);

        $this->set(compact('utilisateur'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $utilisateur = $this->Utilisateurs->newEmptyEntity();
        if ($this->request->is('post')) {
            $utilisateur = $this->Utilisateurs->patchEntity($utilisateur, $this->request->getData());
            if ($this->Utilisateurs->save($utilisateur)) {
                $this->Flash->success(__('The utilisateur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The utilisateur could not be saved. Please, try again.'));
        }
      $personnels = $this->Utilisateurs->Personnels->find('list', ['keyfield' => 'id', 'valueField' => 'nom']);
        $pointdeventes = $this->Utilisateurs->Pointdeventes->find('list', ['limit' => 200])->all();
        $depots = $this->Utilisateurs->Depots->find('list', ['limit' => 200])->all();
        $this->set(compact('utilisateur', 'personnels', 'pointdeventes', 'depots'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Utilisateur id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $utilisateur = $this->Utilisateurs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $utilisateur = $this->Utilisateurs->patchEntity($utilisateur, $this->request->getData());
            if ($this->Utilisateurs->save($utilisateur)) {
                $this->Flash->success(__('The utilisateur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The utilisateur could not be saved. Please, try again.'));
        }
        $personnels = $this->Utilisateurs->Personnels->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Utilisateurs->Pointdeventes->find('list', ['limit' => 200])->all();
        $depots = $this->Utilisateurs->Depots->find('list', ['limit' => 200])->all();
        $this->set(compact('utilisateur', 'personnels', 'pointdeventes', 'depots'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Utilisateur id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $utilisateur = $this->Utilisateurs->get($id);
        if ($this->Utilisateurs->delete($utilisateur)) {
            $this->Flash->success(__('The utilisateur has been deleted.'));
        } else {
            $this->Flash->error(__('The utilisateur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
