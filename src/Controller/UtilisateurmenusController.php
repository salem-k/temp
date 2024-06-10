<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Utilisateurmenus Controller
 *
 * @property \App\Model\Table\UtilisateurmenusTable $Utilisateurmenus
 * @method \App\Model\Entity\Utilisateurmenu[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UtilisateurmenusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Utilisateurs', 'Menus'],
        ];
        $utilisateurmenus = $this->paginate($this->Utilisateurmenus);

        $this->set(compact('utilisateurmenus'));
    }

    /**
     * View method
     *
     * @param string|null $id Utilisateurmenu id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $utilisateurmenu = $this->Utilisateurmenus->get($id, [
            'contain' => ['Utilisateurs', 'Menus', 'Liens'],
        ]);

        $this->set(compact('utilisateurmenu'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $utilisateurmenu = $this->Utilisateurmenus->newEmptyEntity();
        if ($this->request->is('post')) {
            $utilisateurmenu = $this->Utilisateurmenus->patchEntity($utilisateurmenu, $this->request->getData());
            if ($this->Utilisateurmenus->save($utilisateurmenu)) {
                $this->Flash->success(__('The utilisateurmenu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The utilisateurmenu could not be saved. Please, try again.'));
        }
        $utilisateurs = $this->Utilisateurmenus->Utilisateurs->find('list', ['limit' => 200])->all();
        $menus = $this->Utilisateurmenus->Menus->find('list', ['limit' => 200])->all();
        $this->set(compact('utilisateurmenu', 'utilisateurs', 'menus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Utilisateurmenu id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $utilisateurmenu = $this->Utilisateurmenus->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $utilisateurmenu = $this->Utilisateurmenus->patchEntity($utilisateurmenu, $this->request->getData());
            if ($this->Utilisateurmenus->save($utilisateurmenu)) {
                $this->Flash->success(__('The utilisateurmenu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The utilisateurmenu could not be saved. Please, try again.'));
        }
        $utilisateurs = $this->Utilisateurmenus->Utilisateurs->find('list', ['limit' => 200])->all();
        $menus = $this->Utilisateurmenus->Menus->find('list', ['limit' => 200])->all();
        $this->set(compact('utilisateurmenu', 'utilisateurs', 'menus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Utilisateurmenu id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $utilisateurmenu = $this->Utilisateurmenus->get($id);
        if ($this->Utilisateurmenus->delete($utilisateurmenu)) {
            $this->Flash->success(__('The utilisateurmenu has been deleted.'));
        } else {
            $this->Flash->error(__('The utilisateurmenu could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
