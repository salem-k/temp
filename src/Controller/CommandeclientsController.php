<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Commandeclients Controller
 *
 * @property \App\Model\Table\CommandeclientsTable $Commandeclients
 * @method \App\Model\Entity\Commandeclient[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommandeclientsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Pointdeventes', 'Depots', 'Factures'],
        ];
        $commandeclients = $this->paginate($this->Commandeclients);

        $this->set(compact('commandeclients'));
    }

    /**
     * View method
     *
     * @param string|null $id Commandeclient id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $commandeclient = $this->Commandeclients->get($id, [
            'contain' => ['Clients', 'Pointdeventes', 'Depots', 'Factures', 'Commandeclients'],
        ]);

        $this->set(compact('commandeclient'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $commandeclient = $this->Commandeclients->newEmptyEntity();
        if ($this->request->is('post')) {
            $commandeclient = $this->Commandeclients->patchEntity($commandeclient, $this->request->getData());
            if ($this->Commandeclients->save($commandeclient)) {
                if (isset($this->request->getData('data')['ligne']) && (!empty($this->request->getData('data')['ligne']))) {
                    foreach ($this->request->getData('data')['ligne'] as $i => $per) {
                        if ($per['sup'] != 1) {
                            $data2['$commandeclient_id'] = $commandeclient->id;
                            $data2['article_id'] = $per['article_id'];
                            $data2['PrixV'] = $per['PrixV'];
                            $ligne2 = $this->fetchTable('Lignecommandeclients')->newEmptyEntity();
                            $ligne2 = $this->fetchTable('Lignecommandeclients')->patchEntity($ligne2, $data2);
                            if ($this->fetchTable('Lignecommandeclients')->save($ligne2)) {
                            } else {
                            }
                        }
                    }
                }
                $this->Flash->success(__('The commandeclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commandeclient could not be saved. Please, try again.'));
        }
        $clients = $this->Commandeclients->Clients->find('list', ['keyfield' => 'id', 'valueField' => 'nom']);
        $pointdeventes = $this->Commandeclients->Pointdeventes->find('list', ['limit' => 200])->all();
        $depots = $this->Commandeclients->Depots->find('list', ['limit' => 200])->all();
        $factures = $this->Commandeclients->Factures->find('list', ['limit' => 200])->all();
        $articles = $this->fetchTable('Articles')->find('list', ['keyfield' => 'id', 'valueField' => 'Dsignation']);

        $this->set(compact('commandeclient','articles', 'clients', 'pointdeventes', 'depots', 'factures'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Commandeclient id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $commandeclient = $this->Commandeclients->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commandeclient = $this->Commandeclients->patchEntity($commandeclient, $this->request->getData());
            if ($this->Commandeclients->save($commandeclient)) {
                $this->Flash->success(__('The commandeclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commandeclient could not be saved. Please, try again.'));
        }
        $clients = $this->Commandeclients->Clients->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Commandeclients->Pointdeventes->find('list', ['limit' => 200])->all();
        $depots = $this->Commandeclients->Depots->find('list', ['limit' => 200])->all();
        $factures = $this->Commandeclients->Factures->find('list', ['limit' => 200])->all();
        $this->set(compact('commandeclient', 'clients', 'pointdeventes', 'depots', 'factures'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Commandeclient id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $commandeclient = $this->Commandeclients->get($id);
        if ($this->Commandeclients->delete($commandeclient)) {
            $this->Flash->success(__('The commandeclient has been deleted.'));
        } else {
            $this->Flash->error(__('The commandeclient could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
