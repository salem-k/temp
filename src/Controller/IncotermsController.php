<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Incoterms Controller
 *
 * @property \App\Model\Table\IncotermsTable $Incoterms
 * @method \App\Model\Entity\Incoterm[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IncotermsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $incoterms = $this->paginate($this->Incoterms);

        $this->set(compact('incoterms'));
    }

    /**
     * View method
     *
     * @param string|null $id Incoterm id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $incoterm = $this->Incoterms->get($id, [
            'contain' => ['Commandeclients', 'Factureclients', 'Factures', 'Fournisseurs'],
        ]);

        $this->set(compact('incoterm'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $incoterm = $this->Incoterms->newEmptyEntity();
        if ($this->request->is('post')) {
            $incoterm = $this->Incoterms->patchEntity($incoterm, $this->request->getData());
            if ($this->Incoterms->save($incoterm)) {
                $this->Flash->success(__('The incoterm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The incoterm could not be saved. Please, try again.'));
        }
        $this->set(compact('incoterm'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Incoterm id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $incoterm = $this->Incoterms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $incoterm = $this->Incoterms->patchEntity($incoterm, $this->request->getData());
            if ($this->Incoterms->save($incoterm)) {
                $this->Flash->success(__('The incoterm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The incoterm could not be saved. Please, try again.'));
        }
        $this->set(compact('incoterm'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Incoterm id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $incoterm = $this->Incoterms->get($id);
        if ($this->Incoterms->delete($incoterm)) {
            $this->Flash->success(__('The incoterm has been deleted.'));
        } else {
            $this->Flash->error(__('The incoterm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
