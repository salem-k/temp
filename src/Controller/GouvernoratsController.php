<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Gouvernorats Controller
 *
 * @property \App\Model\Table\GouvernoratsTable $Gouvernorats
 * @method \App\Model\Entity\Gouvernorat[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GouvernoratsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pays'],
        ];
        $gouvernorats = $this->paginate($this->Gouvernorats);

        $this->set(compact('gouvernorats'));
    }

    /**
     * View method
     *
     * @param string|null $id Gouvernorat id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gouvernorat = $this->Gouvernorats->get($id, [
            'contain' => ['Pays', 'Clients', 'Fournisseurs'],
        ]);

        $this->set(compact('gouvernorat'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gouvernorat = $this->Gouvernorats->newEmptyEntity();
        if ($this->request->is('post')) {
            $gouvernorat = $this->Gouvernorats->patchEntity($gouvernorat, $this->request->getData());
            if ($this->Gouvernorats->save($gouvernorat)) {
                $this->Flash->success(__('The gouvernorat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gouvernorat could not be saved. Please, try again.'));
        }
        $pays = $this->Gouvernorats->Pays->find('list', ['limit' => 200])->all();
        $this->set(compact('gouvernorat', 'pays'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gouvernorat id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gouvernorat = $this->Gouvernorats->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gouvernorat = $this->Gouvernorats->patchEntity($gouvernorat, $this->request->getData());
            if ($this->Gouvernorats->save($gouvernorat)) {
                $this->Flash->success(__('The gouvernorat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gouvernorat could not be saved. Please, try again.'));
        }
        $pays = $this->Gouvernorats->Pays->find('list', ['limit' => 200])->all();
        $this->set(compact('gouvernorat', 'pays'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gouvernorat id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gouvernorat = $this->Gouvernorats->get($id);
        if ($this->Gouvernorats->delete($gouvernorat)) {
            $this->Flash->success(__('The gouvernorat has been deleted.'));
        } else {
            $this->Flash->error(__('The gouvernorat could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
