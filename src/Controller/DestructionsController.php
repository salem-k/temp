<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Destructions Controller
 *
 * @property \App\Model\Table\DestructionsTable $Destructions
 * @method \App\Model\Entity\Destruction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DestructionsController extends AppController
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
        $destructions = $this->paginate($this->Destructions);

        $this->set(compact('destructions'));
    }

    /**
     * View method
     *
     * @param string|null $id Destruction id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $destruction = $this->Destructions->get($id, [
            'contain' => ['Depots'],
        ]);

        $this->set(compact('destruction'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $destruction = $this->Destructions->newEmptyEntity();
        if ($this->request->is('post')) {
            $destruction = $this->Destructions->patchEntity($destruction, $this->request->getData());
            if ($this->Destructions->save($destruction)) {
                $this->Flash->success(__('The destruction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The destruction could not be saved. Please, try again.'));
        }
        $depots = $this->Destructions->Depots->find('list', ['limit' => 200])->all();
        $this->set(compact('destruction', 'depots'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Destruction id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $destruction = $this->Destructions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $destruction = $this->Destructions->patchEntity($destruction, $this->request->getData());
            if ($this->Destructions->save($destruction)) {
                $this->Flash->success(__('The destruction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The destruction could not be saved. Please, try again.'));
        }
        $depots = $this->Destructions->Depots->find('list', ['limit' => 200])->all();
        $this->set(compact('destruction', 'depots'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Destruction id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $destruction = $this->Destructions->get($id);
        if ($this->Destructions->delete($destruction)) {
            $this->Flash->success(__('The destruction has been deleted.'));
        } else {
            $this->Flash->error(__('The destruction could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
