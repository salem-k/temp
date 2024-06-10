<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Typetiers Controller
 *
 * @property \App\Model\Table\TypetiersTable $Typetiers
 * @method \App\Model\Entity\Typetier[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypetiersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $typetiers = $this->paginate($this->Typetiers);

        $this->set(compact('typetiers'));
    }

    /**
     * View method
     *
     * @param string|null $id Typetier id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typetier = $this->Typetiers->get($id, [
            'contain' => ['Fournisseurs'],
        ]);

        $this->set(compact('typetier'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typetier = $this->Typetiers->newEmptyEntity();
        if ($this->request->is('post')) {
            $typetier = $this->Typetiers->patchEntity($typetier, $this->request->getData());
            if ($this->Typetiers->save($typetier)) {
                $this->Flash->success(__('The typetier has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typetier could not be saved. Please, try again.'));
        }
        $this->set(compact('typetier'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typetier id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typetier = $this->Typetiers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typetier = $this->Typetiers->patchEntity($typetier, $this->request->getData());
            if ($this->Typetiers->save($typetier)) {
                $this->Flash->success(__('The typetier has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typetier could not be saved. Please, try again.'));
        }
        $this->set(compact('typetier'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typetier id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typetier = $this->Typetiers->get($id);
        if ($this->Typetiers->delete($typetier)) {
            $this->Flash->success(__('The typetier has been deleted.'));
        } else {
            $this->Flash->error(__('The typetier could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
