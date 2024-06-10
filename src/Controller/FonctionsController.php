<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Fonctions Controller
 *
 * @property \App\Model\Table\FonctionsTable $Fonctions
 * @method \App\Model\Entity\Fonction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FonctionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $fonctions = $this->paginate($this->Fonctions);

        $this->set(compact('fonctions'));
    }

    /**
     * View method
     *
     * @param string|null $id Fonction id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fonction = $this->Fonctions->get($id, [
            'contain' => ['Personnels', 'Representants'],
        ]);

        $this->set(compact('fonction'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fonction = $this->Fonctions->newEmptyEntity();
        if ($this->request->is('post')) {
            $fonction = $this->Fonctions->patchEntity($fonction, $this->request->getData());
            if ($this->Fonctions->save($fonction)) {
                $this->Flash->success(__('The fonction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fonction could not be saved. Please, try again.'));
        }
        $this->set(compact('fonction'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fonction id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fonction = $this->Fonctions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fonction = $this->Fonctions->patchEntity($fonction, $this->request->getData());
            if ($this->Fonctions->save($fonction)) {
                $this->Flash->success(__('The fonction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fonction could not be saved. Please, try again.'));
        }
        $this->set(compact('fonction'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fonction id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fonction = $this->Fonctions->get($id);
        if ($this->Fonctions->delete($fonction)) {
            $this->Flash->success(__('The fonction has been deleted.'));
        } else {
            $this->Flash->error(__('The fonction could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
