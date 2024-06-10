<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pointdeventes Controller
 *
 * @property \App\Model\Table\PointdeventesTable $Pointdeventes
 * @method \App\Model\Entity\Pointdevente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PointdeventesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $pointdeventes = $this->paginate($this->Pointdeventes);

        $this->set(compact('pointdeventes'));
    }

    /**
     * View method
     *
     * @param string|null $id Pointdevente id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pointdevente = $this->Pointdeventes->get($id, [
            'contain' => ['Bondetransferts', 'Factures', 'Personnels', 'Users', 'Utilisateurs'],
        ]);

        $this->set(compact('pointdevente'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pointdevente = $this->Pointdeventes->newEmptyEntity();
        if ($this->request->is('post')) {
            $pointdevente = $this->Pointdeventes->patchEntity($pointdevente, $this->request->getData());
            if ($this->Pointdeventes->save($pointdevente)) {
                $this->Flash->success(__('The pointdevente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pointdevente could not be saved. Please, try again.'));
        }
        $this->set(compact('pointdevente'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pointdevente id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pointdevente = $this->Pointdeventes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pointdevente = $this->Pointdeventes->patchEntity($pointdevente, $this->request->getData());
            if ($this->Pointdeventes->save($pointdevente)) {
                $this->Flash->success(__('The pointdevente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pointdevente could not be saved. Please, try again.'));
        }
        $this->set(compact('pointdevente'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pointdevente id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pointdevente = $this->Pointdeventes->get($id);
        if ($this->Pointdeventes->delete($pointdevente)) {
            $this->Flash->success(__('The pointdevente has been deleted.'));
        } else {
            $this->Flash->error(__('The pointdevente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
