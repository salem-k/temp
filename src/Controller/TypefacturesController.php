<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Typefactures Controller
 *
 * @property \App\Model\Table\TypefacturesTable $Typefactures
 * @method \App\Model\Entity\Typefacture[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypefacturesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $typefactures = $this->paginate($this->Typefactures);

        $this->set(compact('typefactures'));
    }

    /**
     * View method
     *
     * @param string|null $id Typefacture id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typefacture = $this->Typefactures->get($id, [
            'contain' => ['Factureavoirs', 'Factures'],
        ]);

        $this->set(compact('typefacture'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typefacture = $this->Typefactures->newEmptyEntity();
        if ($this->request->is('post')) {
            $typefacture = $this->Typefactures->patchEntity($typefacture, $this->request->getData());
            if ($this->Typefactures->save($typefacture)) {
                $this->Flash->success(__('The typefacture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typefacture could not be saved. Please, try again.'));
        }
        $this->set(compact('typefacture'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typefacture id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typefacture = $this->Typefactures->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typefacture = $this->Typefactures->patchEntity($typefacture, $this->request->getData());
            if ($this->Typefactures->save($typefacture)) {
                $this->Flash->success(__('The typefacture has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typefacture could not be saved. Please, try again.'));
        }
        $this->set(compact('typefacture'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typefacture id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typefacture = $this->Typefactures->get($id);
        if ($this->Typefactures->delete($typefacture)) {
            $this->Flash->success(__('The typefacture has been deleted.'));
        } else {
            $this->Flash->error(__('The typefacture could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
