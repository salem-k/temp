<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Bontransferts Controller
 *
 * @property \App\Model\Table\BontransfertsTable $Bontransferts
 * @method \App\Model\Entity\Bontransfert[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BontransfertsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Depots'],
        ];
        $bontransferts = $this->paginate($this->Bontransferts);

        $this->set(compact('bontransferts'));
    }

    /**
     * View method
     *
     * @param string|null $id Bontransfert id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bontransfert = $this->Bontransferts->get($id, [
            'contain' => ['Depots'],
        ]);

        $this->set(compact('bontransfert'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bontransfert = $this->Bontransferts->newEmptyEntity();
        if ($this->request->is('post')) {
            $bontransfert = $this->Bontransferts->patchEntity($bontransfert, $this->request->getData());
            if ($this->Bontransferts->save($bontransfert)) {
                $this->Flash->success(__('The bontransfert has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bontransfert could not be saved. Please, try again.'));
        }
        $depots = $this->Bontransferts->Depots->find('list', ['limit' => 200])->all();
        $this->set(compact('bontransfert', 'depots'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bontransfert id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bontransfert = $this->Bontransferts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bontransfert = $this->Bontransferts->patchEntity($bontransfert, $this->request->getData());
            if ($this->Bontransferts->save($bontransfert)) {
                $this->Flash->success(__('The bontransfert has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bontransfert could not be saved. Please, try again.'));
        }
        $depots = $this->Bontransferts->Depots->find('list', ['limit' => 200])->all();
        $this->set(compact('bontransfert', 'depots'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bontransfert id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bontransfert = $this->Bontransferts->get($id);
        if ($this->Bontransferts->delete($bontransfert)) {
            $this->Flash->success(__('The bontransfert has been deleted.'));
        } else {
            $this->Flash->error(__('The bontransfert could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
