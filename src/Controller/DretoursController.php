<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Dretours Controller
 *
 * @property \App\Model\Table\DretoursTable $Dretours
 * @method \App\Model\Entity\Dretour[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DretoursController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $dretours = $this->paginate($this->Dretours);

        $this->set(compact('dretours'));
    }

    /**
     * View method
     *
     * @param string|null $id Dretour id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dretour = $this->Dretours->get($id, [
            'contain' => ['Dretours'],
        ]);

        $this->set(compact('dretour'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dretour = $this->Dretours->newEmptyEntity();
        if ($this->request->is('post')) {
            $dretour = $this->Dretours->patchEntity($dretour, $this->request->getData());
            if ($this->Dretours->save($dretour)) {
                $this->Flash->success(__('The dretour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dretour could not be saved. Please, try again.'));
        }
        $this->set(compact('dretour'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dretour id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dretour = $this->Dretours->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dretour = $this->Dretours->patchEntity($dretour, $this->request->getData());
            if ($this->Dretours->save($dretour)) {
                $this->Flash->success(__('The dretour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dretour could not be saved. Please, try again.'));
        }
        $this->set(compact('dretour'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dretour id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dretour = $this->Dretours->get($id);
        if ($this->Dretours->delete($dretour)) {
            $this->Flash->success(__('The dretour has been deleted.'));
        } else {
            $this->Flash->error(__('The dretour could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
