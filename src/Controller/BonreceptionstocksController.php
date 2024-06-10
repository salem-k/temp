<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Bonreceptionstocks Controller
 *
 * @property \App\Model\Table\BonreceptionstocksTable $Bonreceptionstocks
 * @method \App\Model\Entity\Bonreceptionstock[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BonreceptionstocksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pointdeventes', 'Depots', 'Personnels'],
        ];
        $bonreceptionstocks = $this->paginate($this->Bonreceptionstocks);

        $this->set(compact('bonreceptionstocks'));
    }

    /**
     * View method
     *
     * @param string|null $id Bonreceptionstock id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bonreceptionstock = $this->Bonreceptionstocks->get($id, [
            'contain' => ['Pointdeventes', 'Depots', 'Personnels', 'Bondetransferts'],
        ]);

        $this->set(compact('bonreceptionstock'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bonreceptionstock = $this->Bonreceptionstocks->newEmptyEntity();
        if ($this->request->is('post')) {
            $bonreceptionstock = $this->Bonreceptionstocks->patchEntity($bonreceptionstock, $this->request->getData());
            if ($this->Bonreceptionstocks->save($bonreceptionstock)) {
                $this->Flash->success(__('The bonreceptionstock has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bonreceptionstock could not be saved. Please, try again.'));
        }
        $pointdeventes = $this->Bonreceptionstocks->Pointdeventes->find('list', ['limit' => 200])->all();
        $depots = $this->Bonreceptionstocks->Depots->find('list', ['limit' => 200])->all();
        $personnels = $this->Bonreceptionstocks->Personnels->find('list', ['limit' => 200])->all();
        $this->set(compact('bonreceptionstock', 'pointdeventes', 'depots', 'personnels'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bonreceptionstock id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bonreceptionstock = $this->Bonreceptionstocks->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bonreceptionstock = $this->Bonreceptionstocks->patchEntity($bonreceptionstock, $this->request->getData());
            if ($this->Bonreceptionstocks->save($bonreceptionstock)) {
                $this->Flash->success(__('The bonreceptionstock has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bonreceptionstock could not be saved. Please, try again.'));
        }
        $pointdeventes = $this->Bonreceptionstocks->Pointdeventes->find('list', ['limit' => 200])->all();
        $depots = $this->Bonreceptionstocks->Depots->find('list', ['limit' => 200])->all();
        $personnels = $this->Bonreceptionstocks->Personnels->find('list', ['limit' => 200])->all();
        $this->set(compact('bonreceptionstock', 'pointdeventes', 'depots', 'personnels'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bonreceptionstock id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bonreceptionstock = $this->Bonreceptionstocks->get($id);
        if ($this->Bonreceptionstocks->delete($bonreceptionstock)) {
            $this->Flash->success(__('The bonreceptionstock has been deleted.'));
        } else {
            $this->Flash->error(__('The bonreceptionstock could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
