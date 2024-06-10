<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Accueils Controller
 *
 * @property \App\Model\Table\AccueilsTable $Accueils
 * @method \App\Model\Entity\Accueil[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AccueilsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $accueils = $this->paginate($this->Accueils);

        $this->set(compact('accueils'));
    }

    /**
     * View method
     *
     * @param string|null $id Accueil id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accueil = $this->Accueils->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('accueil'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accueil = $this->Accueils->newEmptyEntity();
        if ($this->request->is('post')) {
            $accueil = $this->Accueils->patchEntity($accueil, $this->request->getData());
            if ($this->Accueils->save($accueil)) {
                $this->Flash->success(__('The accueil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accueil could not be saved. Please, try again.'));
        }
        $this->set(compact('accueil'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Accueil id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accueil = $this->Accueils->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accueil = $this->Accueils->patchEntity($accueil, $this->request->getData());
            if ($this->Accueils->save($accueil)) {
                $this->Flash->success(__('The accueil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accueil could not be saved. Please, try again.'));
        }
        $this->set(compact('accueil'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Accueil id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accueil = $this->Accueils->get($id);
        if ($this->Accueils->delete($accueil)) {
            $this->Flash->success(__('The accueil has been deleted.'));
        } else {
            $this->Flash->error(__('The accueil could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
