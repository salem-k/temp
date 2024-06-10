<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Livraisons Controller
 *
 * @property \App\Model\Table\LivraisonsTable $Livraisons
 * @method \App\Model\Entity\Livraison[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LivraisonsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pointdeventes', 'Depots'],
        ];
        $livraisons = $this->paginate($this->Livraisons);

        $this->set(compact('livraisons'));
    }

    /**
     * View method
     *
     * @param string|null $id Livraison id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $livraison = $this->Livraisons->get($id, [
            'contain' => ['Pointdeventes', 'Depots', 'Factures'],
        ]);

        $this->set(compact('livraison'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $livraison = $this->Livraisons->newEmptyEntity();
        if ($this->request->is('post')) {
            $livraison = $this->Livraisons->patchEntity($livraison, $this->request->getData());
            if ($this->Livraisons->save($livraison)) {
                $this->Flash->success(__('The livraison has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The livraison could not be saved. Please, try again.'));
        }
        $pointdeventes = $this->Livraisons->Pointdeventes->find('list', ['limit' => 200])->all();
        $depots = $this->Livraisons->Depots->find('list', ['limit' => 200])->all();
        $this->set(compact('livraison', 'pointdeventes', 'depots'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Livraison id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $livraison = $this->Livraisons->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $livraison = $this->Livraisons->patchEntity($livraison, $this->request->getData());
            if ($this->Livraisons->save($livraison)) {
                $this->Flash->success(__('The livraison has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The livraison could not be saved. Please, try again.'));
        }
        $pointdeventes = $this->Livraisons->Pointdeventes->find('list', ['limit' => 200])->all();
        $depots = $this->Livraisons->Depots->find('list', ['limit' => 200])->all();
        $this->set(compact('livraison', 'pointdeventes', 'depots'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Livraison id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $livraison = $this->Livraisons->get($id);
        if ($this->Livraisons->delete($livraison)) {
            $this->Flash->success(__('The livraison has been deleted.'));
        } else {
            $this->Flash->error(__('The livraison could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
