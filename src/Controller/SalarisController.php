<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Salaris Controller
 *
 * @property \App\Model\Table\SalarisTable $Salaris
 * @method \App\Model\Entity\Salari[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SalarisController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $salaris = $this->paginate($this->Salaris);

        $this->set(compact('salaris'));
    }

    /**
     * View method
     *
     * @param string|null $id Salari id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salari = $this->Salaris->get($id, [
            'contain' => ['Fournisseurs'],
        ]);

        $this->set(compact('salari'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salari = $this->Salaris->newEmptyEntity();
        if ($this->request->is('post')) {
            $salari = $this->Salaris->patchEntity($salari, $this->request->getData());
            if ($this->Salaris->save($salari)) {
                $this->Flash->success(__('The salari has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salari could not be saved. Please, try again.'));
        }
        $this->set(compact('salari'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Salari id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salari = $this->Salaris->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salari = $this->Salaris->patchEntity($salari, $this->request->getData());
            if ($this->Salaris->save($salari)) {
                $this->Flash->success(__('The salari has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The salari could not be saved. Please, try again.'));
        }
        $this->set(compact('salari'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Salari id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salari = $this->Salaris->get($id);
        if ($this->Salaris->delete($salari)) {
            $this->Flash->success(__('The salari has been deleted.'));
        } else {
            $this->Flash->error(__('The salari could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
