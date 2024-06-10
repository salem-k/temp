<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tvas Controller
 *
 * @property \App\Model\Table\TvasTable $Tvas
 * @method \App\Model\Entity\Tva[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TvasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tvas = $this->paginate($this->Tvas);

        $this->set(compact('tvas'));
    }

    /**
     * View method
     *
     * @param string|null $id Tva id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tva = $this->Tvas->get($id, [
            'contain' => ['Articles'],
        ]);

        $this->set(compact('tva'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tva = $this->Tvas->newEmptyEntity();
        if ($this->request->is('post')) {
            $tva = $this->Tvas->patchEntity($tva, $this->request->getData());
            if ($this->Tvas->save($tva)) {
                $this->Flash->success(__('The tva has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tva could not be saved. Please, try again.'));
        }
        $this->set(compact('tva'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tva id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tva = $this->Tvas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tva = $this->Tvas->patchEntity($tva, $this->request->getData());
            if ($this->Tvas->save($tva)) {
                $this->Flash->success(__('The tva has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tva could not be saved. Please, try again.'));
        }
        $this->set(compact('tva'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tva id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tva = $this->Tvas->get($id);
        if ($this->Tvas->delete($tva)) {
            $this->Flash->success(__('The tva has been deleted.'));
        } else {
            $this->Flash->error(__('The tva could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
