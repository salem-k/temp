<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Commercials Controller
 *
 * @property \App\Model\Table\CommercialsTable $Commercials
 * @method \App\Model\Entity\Commercial[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommercialsController extends AppController
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
        $commercials = $this->paginate($this->Commercials);

        $this->set(compact('commercials'));
    }

    /**
     * View method
     *
     * @param string|null $id Commercial id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $commercial = $this->Commercials->get($id, [
            'contain' => ['Categories'],
        ]);

        $this->set(compact('commercial'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $commercial = $this->Commercials->newEmptyEntity();
        if ($this->request->is('post')) {
            $commercial = $this->Commercials->patchEntity($commercial, $this->request->getData());
            if ($this->Commercials->save($commercial)) {
                $this->Flash->success(__('The commercial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commercial could not be saved. Please, try again.'));
        }
        $categories = $this->Commercials->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('commercial', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Commercial id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $commercial = $this->Commercials->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commercial = $this->Commercials->patchEntity($commercial, $this->request->getData());
            if ($this->Commercials->save($commercial)) {
                $this->Flash->success(__('The commercial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commercial could not be saved. Please, try again.'));
        }
        $categories = $this->Commercials->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('commercial', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Commercial id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $commercial = $this->Commercials->get($id);
        if ($this->Commercials->delete($commercial)) {
            $this->Flash->success(__('The commercial has been deleted.'));
        } else {
            $this->Flash->error(__('The commercial could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
