<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Taches Controller
 *
 * @property \App\Model\Table\TachesTable $Taches
 * @method \App\Model\Entity\Tach[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TachesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Personnels'],
        ];
        $taches = $this->paginate($this->Taches);

        $this->set(compact('taches'));
    }

    /**
     * View method
     *
     * @param string|null $id Tach id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tach = $this->Taches->get($id, [
            'contain' => ['Personnels'],
        ]);

        $this->set(compact('tach'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tach = $this->Taches->newEmptyEntity();
        if ($this->request->is('post')) {
            $tach = $this->Taches->patchEntity($tach, $this->request->getData());
            if ($this->Taches->save($tach)) {
                $this->Flash->success(__('The tach has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tach could not be saved. Please, try again.'));
        }
        $personnels = $this->Taches->Personnels->find('list', ['limit' => 200])->all();
        $this->set(compact('tach', 'personnels'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tach id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tach = $this->Taches->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tach = $this->Taches->patchEntity($tach, $this->request->getData());
            if ($this->Taches->save($tach)) {
                $this->Flash->success(__('The tach has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tach could not be saved. Please, try again.'));
        }
        $personnels = $this->Taches->Personnels->find('list', ['limit' => 200])->all();
        $this->set(compact('tach', 'personnels'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tach id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tach = $this->Taches->get($id);
        if ($this->Taches->delete($tach)) {
            $this->Flash->success(__('The tach has been deleted.'));
        } else {
            $this->Flash->error(__('The tach could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
