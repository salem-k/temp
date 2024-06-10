<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Dstocks Controller
 *
 * @property \App\Model\Table\DstocksTable $Dstocks
 * @method \App\Model\Entity\Dstock[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DstocksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $dstocks = $this->paginate($this->Dstocks);

        $this->set(compact('dstocks'));
    }

    /**
     * View method
     *
     * @param string|null $id Dstock id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dstock = $this->Dstocks->get($id, [
            'contain' => ['Dstocks'],
        ]);

        $this->set(compact('dstock'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dstock = $this->Dstocks->newEmptyEntity();
        if ($this->request->is('post')) {
            $dstock = $this->Dstocks->patchEntity($dstock, $this->request->getData());
            if ($this->Dstocks->save($dstock)) {
                $this->Flash->success(__('The dstock has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dstock could not be saved. Please, try again.'));
        }
        $this->set(compact('dstock'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dstock id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dstock = $this->Dstocks->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dstock = $this->Dstocks->patchEntity($dstock, $this->request->getData());
            if ($this->Dstocks->save($dstock)) {
                $this->Flash->success(__('The dstock has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dstock could not be saved. Please, try again.'));
        }
        $this->set(compact('dstock'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dstock id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dstock = $this->Dstocks->get($id);
        if ($this->Dstocks->delete($dstock)) {
            $this->Flash->success(__('The dstock has been deleted.'));
        } else {
            $this->Flash->error(__('The dstock could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
