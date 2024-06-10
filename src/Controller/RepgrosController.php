<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Repgros Controller
 *
 * @property \App\Model\Table\RepgrosTable $Repgros
 * @method \App\Model\Entity\Repgro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RepgrosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $repgros = $this->paginate($this->Repgros);

        $this->set(compact('repgros'));
    }

    /**
     * View method
     *
     * @param string|null $id Repgro id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $repgro = $this->Repgros->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('repgro'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $repgro = $this->Repgros->newEmptyEntity();
        if ($this->request->is('post')) {
            $repgro = $this->Repgros->patchEntity($repgro, $this->request->getData());
            if ($this->Repgros->save($repgro)) {
                $this->Flash->success(__('The repgro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The repgro could not be saved. Please, try again.'));
        }
        $this->set(compact('repgro'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Repgro id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $repgro = $this->Repgros->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $repgro = $this->Repgros->patchEntity($repgro, $this->request->getData());
            if ($this->Repgros->save($repgro)) {
                $this->Flash->success(__('The repgro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The repgro could not be saved. Please, try again.'));
        }
        $this->set(compact('repgro'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Repgro id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $repgro = $this->Repgros->get($id);
        if ($this->Repgros->delete($repgro)) {
            $this->Flash->success(__('The repgro has been deleted.'));
        } else {
            $this->Flash->error(__('The repgro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
