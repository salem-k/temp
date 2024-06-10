<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Prospects Controller
 *
 * @property \App\Model\Table\ProspectsTable $Prospects
 * @method \App\Model\Entity\Prospect[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProspectsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $prospects = $this->paginate($this->Prospects);

        $this->set(compact('prospects'));
    }

    /**
     * View method
     *
     * @param string|null $id Prospect id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prospect = $this->Prospects->get($id, [
            'contain' => ['Fournisseurs'],
        ]);

        $this->set(compact('prospect'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prospect = $this->Prospects->newEmptyEntity();
        if ($this->request->is('post')) {
            $prospect = $this->Prospects->patchEntity($prospect, $this->request->getData());
            if ($this->Prospects->save($prospect)) {
                $this->Flash->success(__('The prospect has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prospect could not be saved. Please, try again.'));
        }
        $this->set(compact('prospect'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prospect id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prospect = $this->Prospects->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prospect = $this->Prospects->patchEntity($prospect, $this->request->getData());
            if ($this->Prospects->save($prospect)) {
                $this->Flash->success(__('The prospect has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prospect could not be saved. Please, try again.'));
        }
        $this->set(compact('prospect'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prospect id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prospect = $this->Prospects->get($id);
        if ($this->Prospects->delete($prospect)) {
            $this->Flash->success(__('The prospect has been deleted.'));
        } else {
            $this->Flash->error(__('The prospect could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
