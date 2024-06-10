<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Bonlivraisonclients Controller
 *
 * @property \App\Model\Table\BonlivraisonclientsTable $Bonlivraisonclients
 * @method \App\Model\Entity\Bonlivraisonclient[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BonlivraisonclientsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function addbonlivraison($id=null)
    {
        $num = $this->Bonlivraisonclients->find()->select(["numero" =>
        'MAX(Bonlivraisonclients.numero)'])->first();
         //debug($num);
        $n = $num->numero;
        //debug($n);
        // $int=intval($n);
        $in = intval($n) + 1;
        // debug($in);
        $mm = str_pad("$in", 6, "0", STR_PAD_LEFT);
        $boncommande = $this->fetchTable('Boncommandes')->get($id, [
            'contain' => ['Clients','Depots'],
        ]);
      // debug( $boncommande);
        $bonlivraisonclient = $this->Bonlivraisonclients->newEmptyEntity();
       //debug($bonlivraisonclient);
       if ($this->request->is('post')) {
        //debug($this->request->getData());
            $bonlivraisonclient = $this->Bonlivraisonclients->patchEntity($bonlivraisonclient, $this->request->getData());
            
    
            $bonlivraisonclient->depot_id = $boncommande->depot_id;
            $bonlivraisonclient->client_id = $boncommande->client_id;
            $bonlivraisonclient->boncommande_id = $boncommande->id;
            //debug($bonlivraisonclient);
           // $lignes = $this->fetchTable('Lignebonlivraisonclients')->newEmptyEntity();
            //debug($lignes);
            if ($this->Bonlivraisonclients->save($bonlivraisonclient)) {
               // $this->Flash->success(__('The bonlivraisonclient has been saved.'));
              
               $bonlivraisonclient_id = $bonlivraisonclient->id;

               $boncommande->livraison_id=$bonlivraisonclient_id;
               $this->fetchTable('Boncommandes')->save($boncommande);
               if (isset($this->request->getData('data')['tabligne3']) && (!empty($this->request->getData('data')['tabligne3']))) {
                   $this->loadModel('Lignebonlivraisonclients');
                   foreach ($this->request->getData('data')['tabligne3'] as $i => $devii) {
                       if ($devii['sup'] != 1) {

                           $lignes = $this->fetchTable('Lignebonlivraisonclients')->newEmptyEntity();
                           $data['bonlivraisonclient_id'] = $bonlivraisonclient_id;
                           $data['article_id'] = $devii['article_id'];
                           $data['qte'] = $devii['qte'];
                           $data['ttc'] = $this->request->getData('ttc');
                           $data['prix'] = $devii['prix'];
                           $data['remise'] = $devii['remise'];
                           $data['fodec'] = $devii['fodec'];
                           // $data['fodec'] = $this->request->getData('ttc');
                           $data['tva'] = $devii['tva'];


                           $lignes = $this->fetchTable('Lignebonlivraisonclients')->patchEntity($lignes, $data);
                           //debug($lignes);

                           if ($this->fetchTable('Lignebonlivraisonclients')->save($lignes)) {

                              //debug($lignes);


                           } else {
                           }
                       }
                   }
               }
                return $this->redirect(['action' => 'index']);
            }
            //$this->Flash->error(__('The bonlivraisonclient could not be saved. Please, try again.'));
        }
       
        //debug($bonlivraisonclient);
     
        //$clients = $this->Bonlivraisonclients->Clients->find('list', ['limit' => 200])->all();
        $clients = $this->Bonlivraisonclients->Clients->find('list',['keyfield' => 'id', 'valueField' => 'Raison_Social'])->all();
        $depots = $this->Bonlivraisonclients->Depots->find('list', ['limit' => 200])->all();
        $boncommandes = $this->Bonlivraisonclients->Boncommandes->find('list', ['limit' => 200])->all();
        $lignes = $this->fetchTable('Ligneboncommandes')->find()->where(["boncommande_id" => $id]);
        $articles = $this->fetchTable('Articles')->find('list', ['keyfield' => 'id', 'valueField' => 'dsignation']);
       // debug($mm);
       $this->loadModel('Timbres');
       $timbr = $this->Timbres->find('all', ['keyfield' => 'id', 'valueField' => 'timbre']);
       $tab1 = array();
       foreach ($timbr as $tab1); {
           // debug($tab1['timbre']);
       }
        $this->set(compact('bonlivraisonclient', 'clients', 'depots', 'boncommandes','boncommande','lignes','articles','mm','tab1'));
        
    }
    public function index()
    {
        $cond1 = '';
        $cond2 = '';
        $cond3 = '';
        $cond4 = '';
        $cond5 = '';
        $cond6 = '';
        $depot_id = $this->request->getQuery('depot_id');
        $numero = $this->request->getQuery('numero');
        $client_id = $this->request->getQuery('client_id');
        // debug($this->request->getQuery());
        if ($numero) {
            $cond1 = "Bonlivraisonclients.numero like  '%" . $numero . "%' ";
        }
        if ($depot_id) {
            $cond2 = "Bonlivraisonclients.depot_id   like  '%" . $depot_id . "%' ";
        }
        if ($client_id) {
            $cond3 = "Bonlivraisonclients.client_id   like  '%" . $client_id . "%' ";
        }
        $query = $this->Bonlivraisonclients->find('all')->where([$cond1, $cond2,$cond3]);
      
        $this->paginate = [
            'contain' => ['Clients', 'Depots', 'Boncommandes'],
        ];
        $bonlivraisonclients = $this->paginate($query);
        $clients = $this->Bonlivraisonclients->Clients->find('list',['keyfield' => 'id', 'valueField' => 'Raison_Social'])->all();
        //debug($clients->toArray());
        $depots = $this->Bonlivraisonclients->Depots->find('list', ['keyfield' => 'id', 'valueField' => 'name'])->all();
        //debug($bonlivraisonclients);
        $this->set(compact('bonlivraisonclients','clients','depots'));
    }

    /**
     * View method
     *
     * @param string|null $id Bonlivraisonclient id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bonlivraisonclient = $this->Bonlivraisonclients->get($id, [
            'contain' => ['Clients', 'Depots', 'Boncommandes', 'Lignebonlivraisonclients'],
        ]);
        $depots = $this->Bonlivraisonclients->Depots->find('list', ['limit' => 200])->all();
        $boncommandes = $this->Bonlivraisonclients->Boncommandes->find('list', ['limit' => 200])->all();
        $lignes = $this->fetchTable('Lignebonlivraisonclients')->find()->where(["bonlivraisonclient_id" => $id]);
        $clients = $this->Bonlivraisonclients->Clients->find('list',['keyfield' => 'id', 'valueField' => 'Raison_Social'])->all();
        $articles = $this->fetchTable('Articles')->find('list', ['keyfield' => 'id', 'valueField' => 'dsignation']);
        $this->loadModel('Timbres');
        $timbr = $this->Timbres->find('all', ['keyfield' => 'id', 'valueField' => 'timbre']);
        $tab1 = array();
        foreach ($timbr as $tab1); {
            // debug($tab1['timbre']);
        }
        $this->set(compact('bonlivraisonclient', 'clients', 'depots', 'boncommandes','lignes','articles','tab1'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bonlivraisonclient = $this->Bonlivraisonclients->newEmptyEntity();
        if ($this->request->is('post')) {
            $bonlivraisonclient = $this->Bonlivraisonclients->patchEntity($bonlivraisonclient, $this->request->getData());
            if ($this->Bonlivraisonclients->save($bonlivraisonclient)) {
                $this->Flash->success(__('The bonlivraisonclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bonlivraisonclient could not be saved. Please, try again.'));
        }
        $clients = $this->Bonlivraisonclients->Clients->find('list', ['limit' => 200])->all();
        $depots = $this->Bonlivraisonclients->Depots->find('list', ['limit' => 200])->all();
        //$lignes = $this->fetchTable('Ligneboncommandes')->find()->where(["boncommande_id" => $id]);
        $boncommandes = $this->Bonlivraisonclients->Boncommandes->find('list', ['limit' => 200])->all();
        $this->set(compact('bonlivraisonclient', 'clients', 'depots', 'boncommandes'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Bonlivraisonclient id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bonlivraisonclient = $this->Bonlivraisonclients->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bonlivraisonclient = $this->Bonlivraisonclients->patchEntity($bonlivraisonclient, $this->request->getData());
            if ($this->Bonlivraisonclients->save($bonlivraisonclient)) {
                $ligne = $this->fetchTable('Lignebonlivraisonclients')->find()->where(["bonlivraisonclient_id" => $id])->all();
                // debug($ligne->toArray());
                 foreach ($ligne as $item) {
                     $this->fetchTable('Lignebonlivraisonclients')->delete($item);
                 }
                 $bonlivraisonclient_id = $bonlivraisonclient->id;

                 //$boncommande->livraison_id=$bonlivraisonclient_id;
                 //$this->fetchTable('Boncommandes')->save($boncommande);
                 if (isset($this->request->getData('data')['tabligne3']) && (!empty($this->request->getData('data')['tabligne3']))) {
                     $this->loadModel('Lignebonlivraisonclients');
                     foreach ($this->request->getData('data')['tabligne3'] as $i => $devii) {
                         if ($devii['sup'] != 1) {
  
                             $lignes = $this->fetchTable('Lignebonlivraisonclients')->newEmptyEntity();
                             $data['bonlivraisonclient_id'] = $bonlivraisonclient_id;
                             $data['article_id'] = $devii['article_id'];
                             $data['qte'] = $devii['qte'];
                             $data['ttc'] = $this->request->getData('ttc');
                             $data['prix'] = $devii['prix'];
  
                             $data['remise'] = $devii['remise'];
                             $data['fodec'] = $devii['fodec'];
                             // $data['fodec'] = $this->request->getData('ttc');
                             $data['tva'] = $devii['tva'];
  
                             $lignes = $this->fetchTable('Lignebonlivraisonclients')->patchEntity($lignes, $data);
                             //debug($lignes);
  
                             if ($this->fetchTable('Lignebonlivraisonclients')->save($lignes)) {
  
                                //debug($lignes);
  
  
                             } else {
                             }
                         }
                     }
                 }
               // $this->Flash->success(__('The bonlivraisonclient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            //$this->Flash->error(__('The bonlivraisonclient could not be saved. Please, try again.'));
        }
        //$clients = $this->Bonlivraisonclients->Clients->find('list', ['limit' => 200])->all();
        $depots = $this->Bonlivraisonclients->Depots->find('list', ['limit' => 200])->all();
        $boncommandes = $this->Bonlivraisonclients->Boncommandes->find('list', ['limit' => 200])->all();
        $lignes = $this->fetchTable('Lignebonlivraisonclients')->find()->where(["bonlivraisonclient_id" => $id]);
        $clients = $this->Bonlivraisonclients->Clients->find('list',['keyfield' => 'id', 'valueField' => 'Raison_Social'])->all();
        $articles = $this->fetchTable('Articles')->find('list', ['keyfield' => 'id', 'valueField' => 'dsignation']);
        $this->loadModel('Timbres');
        $timbr = $this->Timbres->find('all', ['keyfield' => 'id', 'valueField' => 'timbre']);
        $tab1 = array();
        foreach ($timbr as $tab1); {
            // debug($tab1['timbre']);
        }
        $this->set(compact('bonlivraisonclient', 'clients', 'depots', 'boncommandes','lignes','articles','tab1'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bonlivraisonclient id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bonlivraisonclient = $this->Bonlivraisonclients->get($id);
        if ($this->Bonlivraisonclients->delete($bonlivraisonclient)) {
            //$this->Flash->success(__('The bonlivraisonclient has been deleted.'));
        } else {
            //$this->Flash->error(__('The bonlivraisonclient could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function imprimeview($id = null)
    {
        $bonlivraisonclient = $this->Bonlivraisonclients->get($id, [
            'contain' => [],
        ]);
        //debug($bonlivraisonclient);
        $lignes = $this->fetchTable('Lignebonlivraisonclients')->find()->where(["bonlivraisonclient_id" => $id]);
        $societes = $this->fetchTable('Societes')->find('all');
       // debug($societes->toArray());
        foreach ($societes as $key => $societe) {
            $code_tva=$societe['codetva'];
        }
       // debug( $lignes->toArray());
        $this->set(compact('code_tva','bonlivraisonclient','lignes'));

    }
}
