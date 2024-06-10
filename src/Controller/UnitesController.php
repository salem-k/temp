<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Unites Controller
 *
 * @property \App\Model\Table\UnitesTable $Unites
 * @method \App\Model\Entity\Unite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UnitesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $unites = $this->paginate($this->Unites);

        $this->set(compact('unites'));
    }

    /**
     * View method
     *
     * @param string|null $id Unite id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $unite = $this->Unites->get($id, [
            'contain' => ['Articles'],
        ]);

        $this->set(compact('unite'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $unite = $this->Unites->newEmptyEntity();
        if ($this->request->is('post')) {
            $unite = $this->Unites->patchEntity($unite, $this->request->getData());
            if ($this->Unites->save($unite)) {
                $this->Flash->success(__('The unite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The unite could not be saved. Please, try again.'));
        }
        $this->set(compact('unite'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Unite id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $unite = $this->Unites->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $unite = $this->Unites->patchEntity($unite, $this->request->getData());
            if ($this->Unites->save($unite)) {
                $this->Flash->success(__('The unite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The unite could not be saved. Please, try again.'));
        }
        $this->set(compact('unite'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Unite id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $unite = $this->Unites->get($id);
        if ($this->Unites->delete($unite)) {
            $this->Flash->success(__('The unite has been deleted.'));
        } else {
            $this->Flash->error(__('The unite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
