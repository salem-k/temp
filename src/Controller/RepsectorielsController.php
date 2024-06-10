<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Repsectoriels Controller
 *
 * @property \App\Model\Table\RepsectorielsTable $Repsectoriels
 * @method \App\Model\Entity\Repsectoriel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RepsectorielsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $repsectoriels = $this->paginate($this->Repsectoriels);

        $this->set(compact('repsectoriels'));
    }

    /**
     * View method
     *
     * @param string|null $id Repsectoriel id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $repsectoriel = $this->Repsectoriels->get($id, [
            'contain' => ['Commandegross', 'Commandesects', 'Commentaires'],
        ]);

        $this->set(compact('repsectoriel'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $repsectoriel = $this->Repsectoriels->newEmptyEntity();
        if ($this->request->is('post')) {
            $repsectoriel = $this->Repsectoriels->patchEntity($repsectoriel, $this->request->getData());
            if ($this->Repsectoriels->save($repsectoriel)) {
                $this->Flash->success(__('The repsectoriel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The repsectoriel could not be saved. Please, try again.'));
        }
        $this->set(compact('repsectoriel'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Repsectoriel id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $repsectoriel = $this->Repsectoriels->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $repsectoriel = $this->Repsectoriels->patchEntity($repsectoriel, $this->request->getData());
            if ($this->Repsectoriels->save($repsectoriel)) {
                $this->Flash->success(__('The repsectoriel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The repsectoriel could not be saved. Please, try again.'));
        }
        $this->set(compact('repsectoriel'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Repsectoriel id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $repsectoriel = $this->Repsectoriels->get($id);
        if ($this->Repsectoriels->delete($repsectoriel)) {
            $this->Flash->success(__('The repsectoriel has been deleted.'));
        } else {
            $this->Flash->error(__('The repsectoriel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
