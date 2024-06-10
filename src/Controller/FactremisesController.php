<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Factremises Controller
 *
 * @property \App\Model\Table\FactremisesTable $Factremises
 * @method \App\Model\Entity\Factremise[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FactremisesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients'],
        ];
        $factremises = $this->paginate($this->Factremises);

        $this->set(compact('factremises'));
    }

    /**
     * View method
     *
     * @param string|null $id Factremise id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $factremise = $this->Factremises->get($id, [
            'contain' => ['Clients'],
        ]);

        $this->set(compact('factremise'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $factremise = $this->Factremises->newEmptyEntity();
        if ($this->request->is('post')) {
            $factremise = $this->Factremises->patchEntity($factremise, $this->request->getData());
            if ($this->Factremises->save($factremise)) {
                $this->Flash->success(__('The factremise has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The factremise could not be saved. Please, try again.'));
        }
        $clients = $this->Factremises->Clients->find('list', ['limit' => 200])->all();
        $this->set(compact('factremise', 'clients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Factremise id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $factremise = $this->Factremises->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $factremise = $this->Factremises->patchEntity($factremise, $this->request->getData());
            if ($this->Factremises->save($factremise)) {
                $this->Flash->success(__('The factremise has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The factremise could not be saved. Please, try again.'));
        }
        $clients = $this->Factremises->Clients->find('list', ['limit' => 200])->all();
        $this->set(compact('factremise', 'clients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Factremise id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $factremise = $this->Factremises->get($id);
        if ($this->Factremises->delete($factremise)) {
            $this->Flash->success(__('The factremise has been deleted.'));
        } else {
            $this->Flash->error(__('The factremise could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
