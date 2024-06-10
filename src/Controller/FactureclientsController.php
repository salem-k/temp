<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Factureclients Controller
 *
 * @property \App\Model\Table\FactureclientsTable $Factureclients
 * @method \App\Model\Entity\Factureclient[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FactureclientsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Pointdeventes', 'Depots', 'Commandeclients'],
        ];
        $factureclients = $this->paginate($this->Factureclients);

        $this->set(compact('factureclients'));
    }

    /**
     * View method
     *
     * @param string|null $id Factureclient id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $factureclient = $this->Factureclients->get($id, [
            'contain' => ['Clients', 'Pointdeventes', 'Depots', 'Commandeclients', 'Factureavoirs'],
        ]);

        $this->set(compact('factureclient'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $factureclient = $this->Factureclients->newEmptyEntity();
        if ($this->request->is('post')) {
            $factureclient = $this->Factureclients->patchEntity($factureclient, $this->request->getData());
            if ($this->Factureclients->save($factureclient)) {
                $this->Flash->success(__('The factureclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The factureclient could not be saved. Please, try again.'));
        }
        $clients = $this->Factureclients->Clients->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Factureclients->Pointdeventes->find('list', ['limit' => 200])->all();
        $depots = $this->Factureclients->Depots->find('list', ['limit' => 200])->all();
        $commandeclients = $this->Factureclients->Commandeclients->find('list', ['limit' => 200])->all();
        $this->set(compact('factureclient', 'clients', 'pointdeventes', 'depots', 'commandeclients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Factureclient id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $factureclient = $this->Factureclients->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $factureclient = $this->Factureclients->patchEntity($factureclient, $this->request->getData());
            if ($this->Factureclients->save($factureclient)) {
                $this->Flash->success(__('The factureclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The factureclient could not be saved. Please, try again.'));
        }
        $clients = $this->Factureclients->Clients->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Factureclients->Pointdeventes->find('list', ['limit' => 200])->all();
        $depots = $this->Factureclients->Depots->find('list', ['limit' => 200])->all();
        $commandeclients = $this->Factureclients->Commandeclients->find('list', ['limit' => 200])->all();
        $this->set(compact('factureclient', 'clients', 'pointdeventes', 'depots', 'commandeclients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Factureclient id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $factureclient = $this->Factureclients->get($id);
        if ($this->Factureclients->delete($factureclient)) {
            $this->Flash->success(__('The factureclient has been deleted.'));
        } else {
            $this->Flash->error(__('The factureclient could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
