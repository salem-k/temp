<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Lignedemandeoffredeprixes Controller
 *
 * @property \App\Model\Table\LignedemandeoffredeprixesTable $Lignedemandeoffredeprixes
 * @method \App\Model\Entity\Lignedemandeoffredeprix[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LignedemandeoffredeprixesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Demandeoffredeprixes', 'Articles', 'Fournisseurs'],
        ];
        $lignedemandeoffredeprixes = $this->paginate($this->Lignedemandeoffredeprixes);

        $this->set(compact('lignedemandeoffredeprixes'));
    }

    /**
     * View method
     *
     * @param string|null $id Lignedemandeoffredeprix id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lignedemandeoffredeprix = $this->Lignedemandeoffredeprixes->get($id, [
            'contain' => ['Demandeoffredeprixes', 'Articles', 'Fournisseurs'],
        ]);

        $this->set(compact('lignedemandeoffredeprix'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lignedemandeoffredeprix = $this->Lignedemandeoffredeprixes->newEmptyEntity();
        if ($this->request->is('post')) {
            $lignedemandeoffredeprix = $this->Lignedemandeoffredeprixes->patchEntity($lignedemandeoffredeprix, $this->request->getData());
            if ($this->Lignedemandeoffredeprixes->save($lignedemandeoffredeprix)) {
                $this->Flash->success(__('The lignedemandeoffredeprix has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lignedemandeoffredeprix could not be saved. Please, try again.'));
        }
        $demandeoffredeprixes = $this->Lignedemandeoffredeprixes->Demandeoffredeprixes->find('list', ['limit' => 200])->all();
        $articles = $this->Lignedemandeoffredeprixes->Articles->find('list', ['limit' => 200])->all();
        $fournisseurs = $this->Lignedemandeoffredeprixes->Fournisseurs->find('list', ['limit' => 200])->all();
        $this->set(compact('lignedemandeoffredeprix', 'demandeoffredeprixes', 'articles', 'fournisseurs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lignedemandeoffredeprix id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lignedemandeoffredeprix = $this->Lignedemandeoffredeprixes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lignedemandeoffredeprix = $this->Lignedemandeoffredeprixes->patchEntity($lignedemandeoffredeprix, $this->request->getData());
            if ($this->Lignedemandeoffredeprixes->save($lignedemandeoffredeprix)) {
                $this->Flash->success(__('The lignedemandeoffredeprix has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lignedemandeoffredeprix could not be saved. Please, try again.'));
        }
        $demandeoffredeprixes = $this->Lignedemandeoffredeprixes->Demandeoffredeprixes->find('list', ['limit' => 200])->all();
        $articles = $this->Lignedemandeoffredeprixes->Articles->find('list', ['limit' => 200])->all();
        $fournisseurs = $this->Lignedemandeoffredeprixes->Fournisseurs->find('list', ['limit' => 200])->all();
        $this->set(compact('lignedemandeoffredeprix', 'demandeoffredeprixes', 'articles', 'fournisseurs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lignedemandeoffredeprix id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lignedemandeoffredeprix = $this->Lignedemandeoffredeprixes->get($id);
        if ($this->Lignedemandeoffredeprixes->delete($lignedemandeoffredeprix)) {
            $this->Flash->success(__('The lignedemandeoffredeprix has been deleted.'));
        } else {
            $this->Flash->error(__('The lignedemandeoffredeprix could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
