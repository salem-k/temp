<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Magasins Controller
 *
 * @property \App\Model\Table\MagasinsTable $Magasins
 * @method \App\Model\Entity\Magasin[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MagasinsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $magasins = $this->paginate($this->Magasins);

        $this->set(compact('magasins'));
    }

    /**
     * View method
     *
     * @param string|null $id Magasin id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $magasin = $this->Magasins->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('magasin'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $magasin = $this->Magasins->newEmptyEntity();
        if ($this->request->is('post')) {
            $magasin = $this->Magasins->patchEntity($magasin, $this->request->getData());
            if ($this->Magasins->save($magasin)) {
                $this->Flash->success(__('The magasin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The magasin could not be saved. Please, try again.'));
        }
        $this->set(compact('magasin'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Magasin id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $magasin = $this->Magasins->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $magasin = $this->Magasins->patchEntity($magasin, $this->request->getData());
            if ($this->Magasins->save($magasin)) {
                $this->Flash->success(__('The magasin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The magasin could not be saved. Please, try again.'));
        }
        $this->set(compact('magasin'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Magasin id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $magasin = $this->Magasins->get($id);
        if ($this->Magasins->delete($magasin)) {
            $this->Flash->success(__('The magasin has been deleted.'));
        } else {
            $this->Flash->error(__('The magasin could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
