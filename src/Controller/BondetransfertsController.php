<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Bondetransferts Controller
 *
 * @property \App\Model\Table\BondetransfertsTable $Bondetransferts
 * @method \App\Model\Entity\Bondetransfert[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BondetransfertsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pointdeventes', 'Depots', 'Bonreceptionstocks'],
        ];
        $bondetransferts = $this->paginate($this->Bondetransferts);

        $this->set(compact('bondetransferts'));
    }

    /**
     * View method
     *
     * @param string|null $id Bondetransfert id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bondetransfert = $this->Bondetransferts->get($id, [
            'contain' => ['Pointdeventes', 'Depots', 'Bonreceptionstocks'],
        ]);

        $this->set(compact('bondetransfert'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bondetransfert = $this->Bondetransferts->newEmptyEntity();
        if ($this->request->is('post')) {
            $bondetransfert = $this->Bondetransferts->patchEntity($bondetransfert, $this->request->getData());
            if ($this->Bondetransferts->save($bondetransfert)) {
                $this->Flash->success(__('The bondetransfert has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bondetransfert could not be saved. Please, try again.'));
        }
        $pointdeventes = $this->Bondetransferts->Pointdeventes->find('list', ['limit' => 200])->all();
        $depots = $this->Bondetransferts->Depots->find('list', ['limit' => 200])->all();
        $depotes = $this->Bondetransferts->Depots->find('list', ['limit' => 200])->all();
      $bonreceptionstocks = $this->Bondetransferts->Bonreceptionstocks->find('list', ['limit' => 200])->all();
        $this->set(compact('bondetransfert', 'pointdeventes', 'depots','depotes', 'bonreceptionstocks'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bondetransfert id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bondetransfert = $this->Bondetransferts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bondetransfert = $this->Bondetransferts->patchEntity($bondetransfert, $this->request->getData());
            if ($this->Bondetransferts->save($bondetransfert)) {
                $this->Flash->success(__('The bondetransfert has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bondetransfert could not be saved. Please, try again.'));
        }
        $pointdeventes = $this->Bondetransferts->Pointdeventes->find('list', ['limit' => 200])->all();
        $depots = $this->Bondetransferts->Depots->find('list', ['limit' => 200])->all();
        $bonreceptionstocks = $this->Bondetransferts->Bonreceptionstocks->find('list', ['limit' => 200])->all();
        $this->set(compact('bondetransfert', 'pointdeventes', 'depots', 'bonreceptionstocks'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bondetransfert id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bondetransfert = $this->Bondetransferts->get($id);
        if ($this->Bondetransferts->delete($bondetransfert)) {
            $this->Flash->success(__('The bondetransfert has been deleted.'));
        } else {
            $this->Flash->error(__('The bondetransfert could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
