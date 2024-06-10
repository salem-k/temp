<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Commandegross Controller
 *
 * @property \App\Model\Table\CommandegrossTable $Commandegross
 * @method \App\Model\Entity\Commandegros[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommandegrossController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Repgros', 'Repsectoriels'],
        ];
        $commandegross = $this->paginate($this->Commandegross);

        $this->set(compact('commandegross'));
    }

    /**
     * View method
     *
     * @param string|null $id Commandegros id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $commandegros = $this->Commandegross->get($id, [
            'contain' => ['Repgros', 'Repsectoriels'],
        ]);

        $this->set(compact('commandegros'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $commandegros = $this->Commandegross->newEmptyEntity();
        if ($this->request->is('post')) {
            $commandegros = $this->Commandegross->patchEntity($commandegros, $this->request->getData());
            if ($this->Commandegross->save($commandegros)) {
                $this->Flash->success(__('The commandegros has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commandegros could not be saved. Please, try again.'));
        }
        $repgros = $this->Commandegross->Repgros->find('list', ['limit' => 200])->all();
        $repsectoriels = $this->Commandegross->Repsectoriels->find('list', ['limit' => 200])->all();
        $this->set(compact('commandegros', 'repgros', 'repsectoriels'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Commandegros id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $commandegros = $this->Commandegross->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commandegros = $this->Commandegross->patchEntity($commandegros, $this->request->getData());
            if ($this->Commandegross->save($commandegros)) {
                $this->Flash->success(__('The commandegros has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commandegros could not be saved. Please, try again.'));
        }
        $repgros = $this->Commandegross->Repgros->find('list', ['limit' => 200])->all();
        $repsectoriels = $this->Commandegross->Repsectoriels->find('list', ['limit' => 200])->all();
        $this->set(compact('commandegros', 'repgros', 'repsectoriels'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Commandegros id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $commandegros = $this->Commandegross->get($id);
        if ($this->Commandegross->delete($commandegros)) {
            $this->Flash->success(__('The commandegros has been deleted.'));
        } else {
            $this->Flash->error(__('The commandegros could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
