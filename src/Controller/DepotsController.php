<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Depots Controller
 *
 * @property \App\Model\Table\DepotsTable $Depots
 * @method \App\Model\Entity\Depot[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DepotsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pointdeventes'],
        ];
        $depots = $this->paginate($this->Depots);

        $this->set(compact('depots'));
    }

    /**
     * View method
     *
     * @param string|null $id Depot id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $depot = $this->Depots->get($id, [
            'contain' => ['Pointdeventes', 'Bonreceptionstocks', 'Bontransferts', 'Clients', 'Factureavoirs', 'Factures', 'Users', 'Utilisateurs'],
        ]);

        $this->set(compact('depot'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $depot = $this->Depots->newEmptyEntity();
        if ($this->request->is('post')) {
            $depot = $this->Depots->patchEntity($depot, $this->request->getData());
            if ($this->Depots->save($depot)) {
                $this->Flash->success(__('The depot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The depot could not be saved. Please, try again.'));
        }
        $pointdeventes = $this->Depots->Pointdeventes->find('list', ['limit' => 200])->all();
        $this->set(compact('depot', 'pointdeventes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Depot id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $depot = $this->Depots->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $depot = $this->Depots->patchEntity($depot, $this->request->getData());
            if ($this->Depots->save($depot)) {
                $this->Flash->success(__('The depot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The depot could not be saved. Please, try again.'));
        }
        $pointdeventes = $this->Depots->Pointdeventes->find('list', ['limit' => 200])->all();
        $this->set(compact('depot', 'pointdeventes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Depot id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $depot = $this->Depots->get($id);
        if ($this->Depots->delete($depot)) {
            $this->Flash->success(__('The depot has been deleted.'));
        } else {
            $this->Flash->error(__('The depot could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
