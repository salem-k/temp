<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Localites Controller
 *
 * @property \App\Model\Table\LocalitesTable $Localites
 * @method \App\Model\Entity\Localite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LocalitesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $localites = $this->paginate($this->Localites);

        $this->set(compact('localites'));
    }

    /**
     * View method
     *
     * @param string|null $id Localite id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $localite = $this->Localites->get($id, [
            'contain' => ['Clients'],
        ]);

        $this->set(compact('localite'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $localite = $this->Localites->newEmptyEntity();
        if ($this->request->is('post')) {
            $localite = $this->Localites->patchEntity($localite, $this->request->getData());
            if ($this->Localites->save($localite)) {
                $this->Flash->success(__('The localite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The localite could not be saved. Please, try again.'));
        }
        $this->set(compact('localite'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Localite id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $localite = $this->Localites->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $localite = $this->Localites->patchEntity($localite, $this->request->getData());
            if ($this->Localites->save($localite)) {
                $this->Flash->success(__('The localite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The localite could not be saved. Please, try again.'));
        }
        $this->set(compact('localite'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Localite id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $localite = $this->Localites->get($id);
        if ($this->Localites->delete($localite)) {
            $this->Flash->success(__('The localite has been deleted.'));
        } else {
            $this->Flash->error(__('The localite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
