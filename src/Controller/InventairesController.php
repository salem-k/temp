<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Inventaires Controller
 *
 * @property \App\Model\Table\InventairesTable $Inventaires
 * @method \App\Model\Entity\Inventaire[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InventairesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Depots', 'Pointdeventes'],
        ];
        $inventaires = $this->paginate($this->Inventaires);

        $this->set(compact('inventaires'));
    }

    /**
     * View method
     *
     * @param string|null $id Inventaire id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inventaire = $this->Inventaires->get($id, [
            'contain' => ['Depots', 'Pointdeventes'],
        ]);

        $this->set(compact('inventaire'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inventaire = $this->Inventaires->newEmptyEntity();
        if ($this->request->is('post')) {
            $inventaire = $this->Inventaires->patchEntity($inventaire, $this->request->getData());
            if ($this->Inventaires->save($inventaire)) {
                $this->Flash->success(__('The inventaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inventaire could not be saved. Please, try again.'));
        }
        $depots = $this->Inventaires->Depots->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Inventaires->Pointdeventes->find('list', ['limit' => 200])->all();
        $this->set(compact('inventaire', 'depots', 'pointdeventes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Inventaire id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inventaire = $this->Inventaires->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inventaire = $this->Inventaires->patchEntity($inventaire, $this->request->getData());
            if ($this->Inventaires->save($inventaire)) {
                $this->Flash->success(__('The inventaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inventaire could not be saved. Please, try again.'));
        }
        $depots = $this->Inventaires->Depots->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Inventaires->Pointdeventes->find('list', ['limit' => 200])->all();
        $this->set(compact('inventaire', 'depots', 'pointdeventes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Inventaire id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inventaire = $this->Inventaires->get($id);
        if ($this->Inventaires->delete($inventaire)) {
            $this->Flash->success(__('The inventaire has been deleted.'));
        } else {
            $this->Flash->error(__('The inventaire could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
