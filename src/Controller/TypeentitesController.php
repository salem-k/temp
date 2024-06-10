<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Typeentites Controller
 *
 * @property \App\Model\Table\TypeentitesTable $Typeentites
 * @method \App\Model\Entity\Typeentite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypeentitesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $typeentites = $this->paginate($this->Typeentites);

        $this->set(compact('typeentites'));
    }

    /**
     * View method
     *
     * @param string|null $id Typeentite id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeentite = $this->Typeentites->get($id, [
            'contain' => ['Fournisseurs'],
        ]);

        $this->set(compact('typeentite'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeentite = $this->Typeentites->newEmptyEntity();
        if ($this->request->is('post')) {
            $typeentite = $this->Typeentites->patchEntity($typeentite, $this->request->getData());
            if ($this->Typeentites->save($typeentite)) {
                $this->Flash->success(__('The typeentite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeentite could not be saved. Please, try again.'));
        }
        $this->set(compact('typeentite'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typeentite id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeentite = $this->Typeentites->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeentite = $this->Typeentites->patchEntity($typeentite, $this->request->getData());
            if ($this->Typeentites->save($typeentite)) {
                $this->Flash->success(__('The typeentite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeentite could not be saved. Please, try again.'));
        }
        $this->set(compact('typeentite'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typeentite id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeentite = $this->Typeentites->get($id);
        if ($this->Typeentites->delete($typeentite)) {
            $this->Flash->success(__('The typeentite has been deleted.'));
        } else {
            $this->Flash->error(__('The typeentite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
