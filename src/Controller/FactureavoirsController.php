<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Factureavoirs Controller
 *
 * @property \App\Model\Table\FactureavoirsTable $Factureavoirs
 * @method \App\Model\Entity\Factureavoir[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FactureavoirsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Utilisateurs', 'Factureclients', 'Typefactures', 'Pointdeventes', 'Typeclients', 'Depots'],
        ];
        $factureavoirs = $this->paginate($this->Factureavoirs);

        $this->set(compact('factureavoirs'));
    }

    /**
     * View method
     *
     * @param string|null $id Factureavoir id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $factureavoir = $this->Factureavoirs->get($id, [
            'contain' => ['Clients', 'Utilisateurs', 'Factureclients', 'Typefactures', 'Pointdeventes', 'Typeclients', 'Depots'],
        ]);

        $this->set(compact('factureavoir'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $factureavoir = $this->Factureavoirs->newEmptyEntity();
        if ($this->request->is('post')) {
            $factureavoir = $this->Factureavoirs->patchEntity($factureavoir, $this->request->getData());
            if ($this->Factureavoirs->save($factureavoir)) {
                $this->Flash->success(__('The factureavoir has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The factureavoir could not be saved. Please, try again.'));
        }
        $clients = $this->Factureavoirs->Clients->find('list', ['limit' => 200])->all();
        $utilisateurs = $this->Factureavoirs->Utilisateurs->find('list', ['limit' => 200])->all();
        $factureclients = $this->Factureavoirs->Factureclients->find('list', ['limit' => 200])->all();
        $typefactures = $this->Factureavoirs->Typefactures->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Factureavoirs->Pointdeventes->find('list', ['limit' => 200])->all();
        $typeclients = $this->Factureavoirs->Typeclients->find('list', ['limit' => 200])->all();
        $depots = $this->Factureavoirs->Depots->find('list', ['limit' => 200])->all();
        $this->set(compact('factureavoir', 'clients', 'utilisateurs', 'factureclients', 'typefactures', 'pointdeventes', 'typeclients', 'depots'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Factureavoir id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $factureavoir = $this->Factureavoirs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $factureavoir = $this->Factureavoirs->patchEntity($factureavoir, $this->request->getData());
            if ($this->Factureavoirs->save($factureavoir)) {
                $this->Flash->success(__('The factureavoir has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The factureavoir could not be saved. Please, try again.'));
        }
        $clients = $this->Factureavoirs->Clients->find('list', ['limit' => 200])->all();
        $utilisateurs = $this->Factureavoirs->Utilisateurs->find('list', ['limit' => 200])->all();
        $factureclients = $this->Factureavoirs->Factureclients->find('list', ['limit' => 200])->all();
        $typefactures = $this->Factureavoirs->Typefactures->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Factureavoirs->Pointdeventes->find('list', ['limit' => 200])->all();
        $typeclients = $this->Factureavoirs->Typeclients->find('list', ['limit' => 200])->all();
        $depots = $this->Factureavoirs->Depots->find('list', ['limit' => 200])->all();
        $this->set(compact('factureavoir', 'clients', 'utilisateurs', 'factureclients', 'typefactures', 'pointdeventes', 'typeclients', 'depots'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Factureavoir id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $factureavoir = $this->Factureavoirs->get($id);
        if ($this->Factureavoirs->delete($factureavoir)) {
            $this->Flash->success(__('The factureavoir has been deleted.'));
        } else {
            $this->Flash->error(__('The factureavoir could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
