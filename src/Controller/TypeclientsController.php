<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Typeclients Controller
 *
 * @property \App\Model\Table\TypeclientsTable $Typeclients
 * @method \App\Model\Entity\Typeclient[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypeclientsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $typeclients = $this->paginate($this->Typeclients);

        $this->set(compact('typeclients'));
    }

    /**
     * View method
     *
     * @param string|null $id Typeclient id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeclient = $this->Typeclients->get($id, [
            'contain' => ['Clients', 'Factureavoirs'],
        ]);

        $this->set(compact('typeclient'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeclient = $this->Typeclients->newEmptyEntity();
        if ($this->request->is('post')) {
            $typeclient = $this->Typeclients->patchEntity($typeclient, $this->request->getData());
            if ($this->Typeclients->save($typeclient)) {
                $this->Flash->success(__('The typeclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeclient could not be saved. Please, try again.'));
        }
        $this->set(compact('typeclient'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typeclient id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeclient = $this->Typeclients->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeclient = $this->Typeclients->patchEntity($typeclient, $this->request->getData());
            if ($this->Typeclients->save($typeclient)) {
                $this->Flash->success(__('The typeclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeclient could not be saved. Please, try again.'));
        }
        $this->set(compact('typeclient'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typeclient id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeclient = $this->Typeclients->get($id);
        if ($this->Typeclients->delete($typeclient)) {
            $this->Flash->success(__('The typeclient has been deleted.'));
        } else {
            $this->Flash->error(__('The typeclient could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
