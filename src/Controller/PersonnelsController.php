<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Personnels Controller
 *
 * @property \App\Model\Table\PersonnelsTable $Personnels
 * @method \App\Model\Entity\Personnel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PersonnelsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fonctions', 'Sexes', 'Situationfamiliales', 'Typecontrats', 'Pointdeventes', 'Pays'],
        ];
        $this->loadModel('Fonctions');
        $fonctions = $this->Fonctions->find('list', [
            'keyField' => 'id',
            'valueField' => 'name' // Adjust 'name' to the appropriate field name in your Fonctions table
        ])->toArray();
        $personnels = $this->paginate($this->Personnels);

        $this->set(compact('personnels'));
        $this->set(compact('fonctions'));

    }

    /**
     * View method
     *
     * @param string|null $id Personnel id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $personnel = $this->Personnels->get($id, [
            'contain' => ['Fonctions', 'Sexes', 'Situationfamiliales', 'Typecontrats', 'Pointdeventes', 'Pays', 'Bonreceptionstocks', 'Representants', 'Taches', 'Users', 'Utilisateurs'],
        ]);

        $this->set(compact('personnel'));
      // In your controller action


    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $personnel = $this->Personnels->newEmptyEntity();
        if ($this->request->is('post')) {
            $personnel = $this->Personnels->patchEntity($personnel, $this->request->getData());
            if ($this->Personnels->save($personnel)) {
                $this->Flash->success(__('The personnel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The personnel could not be saved. Please, try again.'));
        }
        $fonctions = $this->Personnels->Fonctions->find('list', ['limit' => 200])->all();
        $sexes = $this->Personnels->Sexes->find('list', ['limit' => 200])->all();
        $situationfamiliales = $this->Personnels->Situationfamiliales->find('list', ['limit' => 200])->all();
        $typecontrats = $this->Personnels->Typecontrats->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Personnels->Pointdeventes->find('list', ['limit' => 200])->all();
        $pays = $this->Personnels->Pays->find('list', ['limit' => 200])->all();
        $this->set(compact('personnel', 'fonctions', 'sexes', 'situationfamiliales', 'typecontrats', 'pointdeventes', 'pays'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Personnel id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $personnel = $this->Personnels->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $personnel = $this->Personnels->patchEntity($personnel, $this->request->getData());
            if ($this->Personnels->save($personnel)) {
                $this->Flash->success(__('The personnel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The personnel could not be saved. Please, try again.'));
        }
        $fonctions = $this->Personnels->Fonctions->find('list', ['limit' => 200])->all();
        $sexes = $this->Personnels->Sexes->find('list', ['limit' => 200])->all();
        $situationfamiliales = $this->Personnels->Situationfamiliales->find('list', ['limit' => 200])->all();
        $typecontrats = $this->Personnels->Typecontrats->find('list', ['limit' => 200])->all();
        $pointdeventes = $this->Personnels->Pointdeventes->find('list', ['limit' => 200])->all();
        $pays = $this->Personnels->Pays->find('list', ['limit' => 200])->all();
        $this->set(compact('personnel', 'fonctions', 'sexes', 'situationfamiliales', 'typecontrats', 'pointdeventes', 'pays'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Personnel id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $personnel = $this->Personnels->get($id);
        if ($this->Personnels->delete($personnel)) {
            $this->Flash->success(__('The personnel has been deleted.'));
        } else {
            $this->Flash->error(__('The personnel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
