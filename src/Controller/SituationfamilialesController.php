<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Situationfamiliales Controller
 *
 * @property \App\Model\Table\SituationfamilialesTable $Situationfamiliales
 * @method \App\Model\Entity\Situationfamiliale[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SituationfamilialesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $situationfamiliales = $this->paginate($this->Situationfamiliales);

        $this->set(compact('situationfamiliales'));
    }

    /**
     * View method
     *
     * @param string|null $id Situationfamiliale id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $situationfamiliale = $this->Situationfamiliales->get($id, [
            'contain' => ['Personnels'],
        ]);

        $this->set(compact('situationfamiliale'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $situationfamiliale = $this->Situationfamiliales->newEmptyEntity();
        if ($this->request->is('post')) {
            $situationfamiliale = $this->Situationfamiliales->patchEntity($situationfamiliale, $this->request->getData());
            if ($this->Situationfamiliales->save($situationfamiliale)) {
                $this->Flash->success(__('The situationfamiliale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The situationfamiliale could not be saved. Please, try again.'));
        }
        $this->set(compact('situationfamiliale'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Situationfamiliale id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $situationfamiliale = $this->Situationfamiliales->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $situationfamiliale = $this->Situationfamiliales->patchEntity($situationfamiliale, $this->request->getData());
            if ($this->Situationfamiliales->save($situationfamiliale)) {
                $this->Flash->success(__('The situationfamiliale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The situationfamiliale could not be saved. Please, try again.'));
        }
        $this->set(compact('situationfamiliale'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Situationfamiliale id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $situationfamiliale = $this->Situationfamiliales->get($id);
        if ($this->Situationfamiliales->delete($situationfamiliale)) {
            $this->Flash->success(__('The situationfamiliale has been deleted.'));
        } else {
            $this->Flash->error(__('The situationfamiliale could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
