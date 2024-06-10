<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Factavoirs Controller
 *
 * @property \App\Model\Table\FactavoirsTable $Factavoirs
 * @method \App\Model\Entity\Factavoir[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FactavoirsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Factures'],
        ];
        $factavoirs = $this->paginate($this->Factavoirs);

        $this->set(compact('factavoirs'));
    }

    /**
     * View method
     *
     * @param string|null $id Factavoir id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $factavoir = $this->Factavoirs->get($id, [
            'contain' => ['Clients', 'Factures'],
        ]);

        $this->set(compact('factavoir'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $factavoir = $this->Factavoirs->newEmptyEntity();
        if ($this->request->is('post')) {
            $factavoir = $this->Factavoirs->patchEntity($factavoir, $this->request->getData());
            if ($this->Factavoirs->save($factavoir)) {
                $this->Flash->success(__('The factavoir has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The factavoir could not be saved. Please, try again.'));
        }
        $clients = $this->Factavoirs->Clients->find('list', ['limit' => 200])->all();
        $factures = $this->Factavoirs->Factures->find('list', ['limit' => 200])->all();
        $this->set(compact('factavoir', 'clients', 'factures'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Factavoir id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $factavoir = $this->Factavoirs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $factavoir = $this->Factavoirs->patchEntity($factavoir, $this->request->getData());
            if ($this->Factavoirs->save($factavoir)) {
                $this->Flash->success(__('The factavoir has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The factavoir could not be saved. Please, try again.'));
        }
        $clients = $this->Factavoirs->Clients->find('list', ['limit' => 200])->all();
        $factures = $this->Factavoirs->Factures->find('list', ['limit' => 200])->all();
        $this->set(compact('factavoir', 'clients', 'factures'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Factavoir id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $factavoir = $this->Factavoirs->get($id);
        if ($this->Factavoirs->delete($factavoir)) {
            $this->Flash->success(__('The factavoir has been deleted.'));
        } else {
            $this->Flash->error(__('The factavoir could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
