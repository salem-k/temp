<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Representants Controller
 *
 * @property \App\Model\Table\RepresentantsTable $Representants
 * @method \App\Model\Entity\Representant[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RepresentantsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Personnels', 'Fonctions'],
        ];
        $representants = $this->paginate($this->Representants);

        $this->set(compact('representants'));
    }

    /**
     * View method
     *
     * @param string|null $id Representant id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $representant = $this->Representants->get($id, [
            'contain' => ['Personnels', 'Fonctions'],
        ]);

        $this->set(compact('representant'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $representant = $this->Representants->newEmptyEntity();
        if ($this->request->is('post')) {
            $representant = $this->Representants->patchEntity($representant, $this->request->getData());
            if ($this->Representants->save($representant)) {
                $this->Flash->success(__('The representant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The representant could not be saved. Please, try again.'));
        }
        $personnels = $this->Representants->Personnels->find('list', ['keyfield' => 'id', 'valueField' => 'nom']);
      //$personnels = $this->fetchTable('Personnels')->find('list', ['keyfield' => 'id', 'valueField' => 'nom']);

      $fonctions = $this->Representants->Fonctions->find('list', ['limit' => 200])->all();
        $this->set(compact('representant', 'personnels', 'fonctions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Representant id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $representant = $this->Representants->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $representant = $this->Representants->patchEntity($representant, $this->request->getData());
            if ($this->Representants->save($representant)) {
                $this->Flash->success(__('The representant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The representant could not be saved. Please, try again.'));
        }
        $personnels = $this->Representants->Personnels->find('list', ['limit' => 200])->all();
        $fonctions = $this->Representants->Fonctions->find('list', ['limit' => 200])->all();
        $this->set(compact('representant', 'personnels', 'fonctions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Representant id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $representant = $this->Representants->get($id);
        if ($this->Representants->delete($representant)) {
            $this->Flash->success(__('The representant has been deleted.'));
        } else {
            $this->Flash->error(__('The representant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
