<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Devises Controller
 *
 * @property \App\Model\Table\DevisesTable $Devises
 * @method \App\Model\Entity\Devise[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DevisesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $devises = $this->paginate($this->Devises);

        $this->set(compact('devises'));
    }

    /**
     * View method
     *
     * @param string|null $id Devise id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $devise = $this->Devises->get($id, [
            'contain' => ['Banques', 'Clients', 'Factures', 'Fournisseurs'],
        ]);

        $this->set(compact('devise'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $devise = $this->Devises->newEmptyEntity();
        if ($this->request->is('post')) {
            $devise = $this->Devises->patchEntity($devise, $this->request->getData());
            if ($this->Devises->save($devise)) {
                $this->Flash->success(__('The devise has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The devise could not be saved. Please, try again.'));
        }
        $this->set(compact('devise'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Devise id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $devise = $this->Devises->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $devise = $this->Devises->patchEntity($devise, $this->request->getData());
            if ($this->Devises->save($devise)) {
                $this->Flash->success(__('The devise has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The devise could not be saved. Please, try again.'));
        }
        $this->set(compact('devise'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Devise id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $devise = $this->Devises->get($id);
        if ($this->Devises->delete($devise)) {
            $this->Flash->success(__('The devise has been deleted.'));
        } else {
            $this->Flash->error(__('The devise could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
