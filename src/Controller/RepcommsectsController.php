<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Repcommsects Controller
 *
 * @property \App\Model\Table\RepcommsectsTable $Repcommsects
 * @method \App\Model\Entity\Repcommsect[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RepcommsectsController extends AppController
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
        $repcommsects = $this->paginate($this->Repcommsects);

        $this->set(compact('repcommsects'));
    }

    /**
     * View method
     *
     * @param string|null $id Repcommsect id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $repcommsect = $this->Repcommsects->get($id, [
            'contain' => ['Depots'],
        ]);

        $this->set(compact('repcommsect'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $repcommsect = $this->Repcommsects->newEmptyEntity();
        if ($this->request->is('post')) {
            $repcommsect = $this->Repcommsects->patchEntity($repcommsect, $this->request->getData());
            if ($this->Repcommsects->save($repcommsect)) {
                $this->Flash->success(__('The repcommsect has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The repcommsect could not be saved. Please, try again.'));
        }
        $depots = $this->Repcommsects->Depots->find('list', ['limit' => 200])->all();
        $this->set(compact('repcommsect', 'depots'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Repcommsect id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $repcommsect = $this->Repcommsects->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $repcommsect = $this->Repcommsects->patchEntity($repcommsect, $this->request->getData());
            if ($this->Repcommsects->save($repcommsect)) {
                $this->Flash->success(__('The repcommsect has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The repcommsect could not be saved. Please, try again.'));
        }
        $depots = $this->Repcommsects->Depots->find('list', ['limit' => 200])->all();
        $this->set(compact('repcommsect', 'depots'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Repcommsect id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $repcommsect = $this->Repcommsects->get($id);
        if ($this->Repcommsects->delete($repcommsect)) {
            $this->Flash->success(__('The repcommsect has been deleted.'));
        } else {
            $this->Flash->error(__('The repcommsect could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
