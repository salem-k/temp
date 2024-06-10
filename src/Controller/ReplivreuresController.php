<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Replivreures Controller
 *
 * @property \App\Model\Table\ReplivreuresTable $Replivreures
 * @method \App\Model\Entity\Replivreure[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReplivreuresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Depots'],
        ];
        $replivreures = $this->paginate($this->Replivreures);

        $this->set(compact('replivreures'));
    }

    /**
     * View method
     *
     * @param string|null $id Replivreure id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $replivreure = $this->Replivreures->get($id, [
            'contain' => ['Depots'],
        ]);

        $this->set(compact('replivreure'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $replivreure = $this->Replivreures->newEmptyEntity();
        if ($this->request->is('post')) {
            $replivreure = $this->Replivreures->patchEntity($replivreure, $this->request->getData());
            if ($this->Replivreures->save($replivreure)) {
                $this->Flash->success(__('The replivreure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The replivreure could not be saved. Please, try again.'));
        }
        $depots = $this->Replivreures->Depots->find('list', ['limit' => 200])->all();
        $this->set(compact('replivreure', 'depots'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Replivreure id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $replivreure = $this->Replivreures->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $replivreure = $this->Replivreures->patchEntity($replivreure, $this->request->getData());
            if ($this->Replivreures->save($replivreure)) {
                $this->Flash->success(__('The replivreure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The replivreure could not be saved. Please, try again.'));
        }
        $depots = $this->Replivreures->Depots->find('list', ['limit' => 200])->all();
        $this->set(compact('replivreure', 'depots'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Replivreure id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $replivreure = $this->Replivreures->get($id);
        if ($this->Replivreures->delete($replivreure)) {
            $this->Flash->success(__('The replivreure has been deleted.'));
        } else {
            $this->Flash->error(__('The replivreure could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
