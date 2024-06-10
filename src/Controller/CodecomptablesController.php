<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Codecomptables Controller
 *
 * @property \App\Model\Table\CodecomptablesTable $Codecomptables
 * @method \App\Model\Entity\Codecomptable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CodecomptablesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $codecomptables = $this->paginate($this->Codecomptables);

        $this->set(compact('codecomptables'));
    }

    /**
     * View method
     *
     * @param string|null $id Codecomptable id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $codecomptable = $this->Codecomptables->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('codecomptable'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $codecomptable = $this->Codecomptables->newEmptyEntity();
        if ($this->request->is('post')) {
            $codecomptable = $this->Codecomptables->patchEntity($codecomptable, $this->request->getData());
            if ($this->Codecomptables->save($codecomptable)) {
                $this->Flash->success(__('The codecomptable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The codecomptable could not be saved. Please, try again.'));
        }
        $this->set(compact('codecomptable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Codecomptable id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $codecomptable = $this->Codecomptables->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $codecomptable = $this->Codecomptables->patchEntity($codecomptable, $this->request->getData());
            if ($this->Codecomptables->save($codecomptable)) {
                $this->Flash->success(__('The codecomptable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The codecomptable could not be saved. Please, try again.'));
        }
        $this->set(compact('codecomptable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Codecomptable id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $codecomptable = $this->Codecomptables->get($id);
        if ($this->Codecomptables->delete($codecomptable)) {
            $this->Flash->success(__('The codecomptable has been deleted.'));
        } else {
            $this->Flash->error(__('The codecomptable could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
