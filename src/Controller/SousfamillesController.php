<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Sousfamilles Controller
 *
 * @property \App\Model\Table\SousfamillesTable $Sousfamilles
 * @method \App\Model\Entity\Sousfamille[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SousfamillesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories'],
        ];
        $sousfamilles = $this->paginate($this->Sousfamilles);

        $this->set(compact('sousfamilles'));
    }

    /**
     * View method
     *
     * @param string|null $id Sousfamille id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sousfamille = $this->Sousfamilles->get($id, [
            'contain' => ['Categories'],
        ]);

        $this->set(compact('sousfamille'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sousfamille = $this->Sousfamilles->newEmptyEntity();
        if ($this->request->is('post')) {
            $sousfamille = $this->Sousfamilles->patchEntity($sousfamille, $this->request->getData());
            if ($this->Sousfamilles->save($sousfamille)) {
                $this->Flash->success(__('The sousfamille has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sousfamille could not be saved. Please, try again.'));
        }
        $categories = $this->Sousfamilles->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('sousfamille', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sousfamille id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sousfamille = $this->Sousfamilles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sousfamille = $this->Sousfamilles->patchEntity($sousfamille, $this->request->getData());
            if ($this->Sousfamilles->save($sousfamille)) {
                $this->Flash->success(__('The sousfamille has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sousfamille could not be saved. Please, try again.'));
        }
        $categories = $this->Sousfamilles->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('sousfamille', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sousfamille id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sousfamille = $this->Sousfamilles->get($id);
        if ($this->Sousfamilles->delete($sousfamille)) {
            $this->Flash->success(__('The sousfamille has been deleted.'));
        } else {
            $this->Flash->error(__('The sousfamille could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
