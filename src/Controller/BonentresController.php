<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Bonentres Controller
 *
 * @property \App\Model\Table\BonentresTable $Bonentres
 * @method \App\Model\Entity\Bonentre[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BonentresController extends AppController
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
        $bonentres = $this->paginate($this->Bonentres);

        $this->set(compact('bonentres'));
    }

    /**
     * View method
     *
     * @param string|null $id Bonentre id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bonentre = $this->Bonentres->get($id, [
            'contain' => ['Depots'],
        ]);

        $this->set(compact('bonentre'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bonentre = $this->Bonentres->newEmptyEntity();
        if ($this->request->is('post')) {
            $bonentre = $this->Bonentres->patchEntity($bonentre, $this->request->getData());
            if ($this->Bonentres->save($bonentre)) {
                $this->Flash->success(__('The bonentre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bonentre could not be saved. Please, try again.'));
        }
        $depots = $this->Bonentres->Depots->find('list', ['limit' => 200])->all();
        $this->set(compact('bonentre', 'depots'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bonentre id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bonentre = $this->Bonentres->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bonentre = $this->Bonentres->patchEntity($bonentre, $this->request->getData());
            if ($this->Bonentres->save($bonentre)) {
                $this->Flash->success(__('The bonentre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bonentre could not be saved. Please, try again.'));
        }
        $depots = $this->Bonentres->Depots->find('list', ['limit' => 200])->all();
        $this->set(compact('bonentre', 'depots'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bonentre id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bonentre = $this->Bonentres->get($id);
        if ($this->Bonentres->delete($bonentre)) {
            $this->Flash->success(__('The bonentre has been deleted.'));
        } else {
            $this->Flash->error(__('The bonentre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
