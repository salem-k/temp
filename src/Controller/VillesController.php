<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Villes Controller
 *
 * @property \App\Model\Table\VillesTable $Villes
 * @method \App\Model\Entity\Ville[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VillesController extends AppController
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
        $villes = $this->paginate($this->Villes);

        $this->set(compact('villes'));
    }

    /**
     * View method
     *
     * @param string|null $id Ville id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ville = $this->Villes->get($id, [
            'contain' => ['Pays', 'Pointdeventes'],
        ]);

        $this->set(compact('ville'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ville = $this->Villes->newEmptyEntity();
        if ($this->request->is('post')) {
            $ville = $this->Villes->patchEntity($ville, $this->request->getData());
            if ($this->Villes->save($ville)) {
                $this->Flash->success(__('The ville has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ville could not be saved. Please, try again.'));
        }
        $pays = $this->Villes->Pays->find('list', ['limit' => 200])->all();
        $this->set(compact('ville', 'pays'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ville id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ville = $this->Villes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ville = $this->Villes->patchEntity($ville, $this->request->getData());
            if ($this->Villes->save($ville)) {
                $this->Flash->success(__('The ville has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ville could not be saved. Please, try again.'));
        }
        $pays = $this->Villes->Pays->find('list', ['limit' => 200])->all();
        $this->set(compact('ville', 'pays'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ville id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ville = $this->Villes->get($id);
        if ($this->Villes->delete($ville)) {
            $this->Flash->success(__('The ville has been deleted.'));
        } else {
            $this->Flash->error(__('The ville could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
