<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Mailer\Mailer;
use Cake\Mailer\Message;

/**
 * Demandeoffredeprixes Controller
 *
 * @property \App\Model\Table\DemandeoffredeprixesTable $Demandeoffredeprixes
 * @method \App\Model\Entity\Demandeoffredeprix[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DemandeoffredeprixesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function imprimeview($id = null)
    {
        $demandeoffredeprix = $this->Demandeoffredeprixes->get($id, []);
        $this->loadModel('LiU23PChmx7WARsRfzvsE1LPt3TBxKJBPs');
        $frs = $this->LiU23PChmx7WARsRfzvsE1LPt3TBxKJBPs->find('all')->where(["demandeoffredeprix_id=" . $id . ""])
            ->group(["nomfr" => '(LiU23PChmx7WARsRfzvsE1LPt3TBxKJBPs.nameF)']);
        $j = 0;
        $tab[] = array();
        foreach ($frs as $j => $tab)
            $nb = $this->LiU23PChmx7WARsRfzvsE1LPt3TBxKJBPs->find('all')
                ->where(["demandeoffredeprix_id=" . $id . ""])
                ->group(["nomfr" => '(LiU23PChmx7WARsRfzvsE1LPt3TBxKJBPs.nameF)'])
                ->order(["Lignelignebandeconsultation.t"])
                ->count('*');

        //debug($nb);


        $this->loadModel('Lignebandeconsultations');
        $lignebande = $this->Lignebandeconsultations->find('all')->where(["demandeoffredeprix_id=" . $id . ""])
            ->group(["nomart" => '(Lignebandeconsultations.designiationA)']);



        //debug($bandeconsultation);
        $i = 0;
        $tab1[] = array();
        foreach ($lignebande as $i => $tab1)
            $this->set(compact('demandeoffredeprix', 'frs', 'tab', 'lignebande', 'tab1'));
    }

    public function index($typeof = null)
    {
        $cond2 = '';
        $cond1 = '';
        $cond3 = '';
        $numero = $this->request->getQuery('numero');
        $datedebut = $this->request->getQuery('datedebut');
        $datefin = $this->request->getQuery('datefin');
        if ($numero) {
            $cond1 = "Demandeoffredeprixes.numero  like'%" . $numero . "%'";
        }
        if ($datedebut) {
            $cond2 = "Demandeoffredeprixes.date >='" . $datedebut . "'";
        }

        if ($datefin) {
            $cond3 = "Demandeoffredeprixes.date <='" . $datefin . "'";
        }

        $condtype = "Demandeoffredeprixes.typeoffredeprix=" . $typeof;

        $this->paginate = [
            'contain' => ['Projets'],
        ];
        $query = $this->Demandeoffredeprixes->find('all')->where([$cond1, $cond2, $cond3]);
        //->order(['Demandeoffredeprixes.id' => 'DESC']);
        // $recherches = $this->paginate($query);
        $demandeoffredeprixes = $this->paginate($query);
        $this->set(compact('typeof', 'demandeoffredeprixes', 'numero', 'datefin', 'datedebut', 'recherches', 'numero', 'datedebut', 'datefin'));
        //debug($recherches);die();
    }

    /**
     * View method
     *
     * @param string|null $id Demandeoffredeprix id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     *
     * @param string|null $id
     *
     *
     */
    public function view($id = null)
    {

        $this->loadModel('Fournisseurs');
        $this->loadModel('Articles');
        $this->loadModel('Lignedemandeoffredeprixes');
        $demandeoffredeprix = $this->Demandeoffredeprixes->get($id, [
            'contain' => ['Bandeconsultations', 'Lignebandeconsultations', 'Lignedemandeoffredeprixes', 'LiU23PChmx7WARsRfzvsE1LPt3TBxKJBPs'],
        ]);

        $ligneas = $this->Lignedemandeoffredeprixes->find('all', ['keyfield' => 'id', 'valueField' => 'designiationA'])
            ->group(["nomar" => '(Lignedemandeoffredeprixes.designiationA)'])
            ->where(["Lignedemandeoffredeprixes.demandeoffredeprix_id ='" . $id . "'"]);

        // debug($ligneas);die;




        $lignefs = $this->Lignedemandeoffredeprixes->find('all', ['keyfield' => 'id', 'valueField' => 'nameF'])
            ->group(["nomfour" => '(Lignedemandeoffredeprixes.nameF)'])
            ->where(["Lignedemandeoffredeprixes.demandeoffredeprix_id  ='" . $id . "'"]);
        //dd($lignefs);
        $this->loadModel('Projets');
        $fournisseurs = $this->Demandeoffredeprixes->Fournisseurs->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
        $projets = $this->fetchTable('Projets')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
        $this->set(compact('lignefs', 'ligneas', 'demandeoffredeprix', 'projets', 'fournisseurs'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($typeof = null)
    {
        $session = $this->request->getSession();
        $abrv = $session->read('abrvv');
        $liendd = $session->read('lien_achat' . $abrv);
        //   debug($liendd);
        $dmd = 0;
        foreach ($liendd as $k => $liens) {
            //  debug($liens);
            if (@$liens['lien'] == 'demandeoffredeprixes') {
                $dmd = $liens['ajout'];
            }
        }
        // debug($societe);die;
        if (($dmd <> 1)) {
            $this->redirect(array('controller' => 'users', 'action' => 'login'));
        }





        $this->loadModel('Fournisseurs');
        $this->loadModel('Articles');
        $this->loadModel('Lignedemandeoffredeprixes');


        $num = $this->Demandeoffredeprixes->find()->select([
            "numdepot" =>
                'MAX(Demandeoffredeprixes.numero)'
        ])->first();
        $numero = $num->numdepot;
        //  DOF00001
        $n = 0;
        $n = $numero;
        if (!empty($n)) {
            $ff = intval(substr($n, 3, 7)) + 1;
            $z = str_pad("$ff", 5, '0', STR_PAD_LEFT);
            $c = str_pad("$z", 6, 'F', STR_PAD_LEFT);
            $code = str_pad("$c", 7, 'O', STR_PAD_LEFT);
            $b = str_pad("$code", 8, 'D', STR_PAD_LEFT);
        } else {
            $n = "00001";
            $c = str_pad("$n", 6, 'F', STR_PAD_LEFT);
            $code = str_pad("$c", 7, 'O', STR_PAD_LEFT);
            $b = str_pad("$code", 8, 'D', STR_PAD_LEFT);
        }
        $this->set(compact('b'));
        $demandeoffredeprix = $this->Demandeoffredeprixes->newEmptyEntity();
        if ($this->request->is('post')) {
            //dd($this->request->getData());
            $num = $this->Demandeoffredeprixes->find()->select([
                "numdepot" =>
                    'MAX(Demandeoffredeprixes.numero)'
            ])->first();
            $numero = $num->numdepot;
            //  DOF00001
            $n = 0;
            $n = $numero;
            if (!empty($n)) {
                $ff = intval(substr($n, 3, 7)) + 1;
                $z = str_pad("$ff", 5, '0', STR_PAD_LEFT);
                $c = str_pad("$z", 6, 'F', STR_PAD_LEFT);
                $code = str_pad("$c", 7, 'O', STR_PAD_LEFT);
                $b = str_pad("$code", 8, 'D', STR_PAD_LEFT);
            } else {
                $n = "00001";
                $c = str_pad("$n", 6, 'F', STR_PAD_LEFT);
                $code = str_pad("$c", 7, 'O', STR_PAD_LEFT);
                $b = str_pad("$code", 8, 'D', STR_PAD_LEFT);
            }
            $this->set(compact('b'));

            // debug( $this->request->getData());die;
            $demandeoffredeprix = $this->Demandeoffredeprixes->patchEntity($demandeoffredeprix, $this->request->getData());

            $demandeoffredeprix->typeoffredeprix = $typeof;
            $demandeoffredeprix->projet_id = $this->request->getData('projet_id');
            if ($this->Demandeoffredeprixes->save($demandeoffredeprix)) {
                $demandeoffredeprix_id = ($this->Demandeoffredeprixes->save($demandeoffredeprix)->id);
                $this->misejour("Demandeoffredeprixes", "add", $demandeoffredeprix_id);



                $id = $demandeoffredeprix->id;


                if (isset($this->request->getData('data')['lignef']) && (!empty($this->request->getData('data')['lignef']))) {
                    foreach ($this->request->getData('data')['lignef'] as $j => $fourni) {
                        if ($fourni['sup1'] != 1) {

                            if ($fourni['fournisseur_id'] == '') {

                                $datafourni['name'] = $fourni['nameF'];
                                $datafourni['mail'] = $fourni['mail'];

                                $fournisseurs = $this->fetchTable('Fournisseurs')->newEmptyEntity();
                                $fournisseurs = $this->Fournisseurs->patchEntity($fournisseurs, $datafourni);
                                //
                                if ($this->Fournisseurs->save($fournisseurs)) {
                                    //dd($fournisseurs->id);
                                    $idfour = $fournisseurs->id;
                                    //                                          debug($demandeoffre);
                                    // $this->Flash->success("demande offre de prix has been created successfully");
                                }
                            }


                            if (isset($this->request->getData('data')['lignea']) && (!empty($this->request->getData('data')['lignea']))) {
                                $this->loadModel('Articles');
                                foreach ($this->request->getData('data')['lignea'] as $i => $art) {

                                    if ($art['sup0'] != 1) {
                                        if ($art['article_id']) {

                                            $ar = $this->Articles->find()->select(["nomarticle" => '(Articles.Dsignation)'])->where(["Articles.id" => $art['article_id']])->first();
                                            $arr = $ar->nomarticle;
                                            $art['designiationA'] = $arr;
                                        } else {
                                            $art['designiationA'] = $art['article_idd'];
                                        }

                                        $data['demandeoffredeprix_id'] = $id;
                                        $data['article_id'] = $art['article_id'];
                                        $data['designiationA'] = $art['designiationA'];
                                        $data['qte'] = $art['qte'];
                                        if ($fourni['fournisseur_id'] == "") {
                                            $data['fournisseur_id'] = $idfour;
                                            $data['nameF'] = $fourni['nameF'];
                                        } else {
                                            $data['fournisseur_id'] = $fourni['fournisseur_id'];
                                            $free = $this->Fournisseurs->find()->select(["nom" => '(Fournisseurs.name)'])->where(["Fournisseurs.id" => $fourni['fournisseur_id']])->first();
                                            // dd();
                                            $data['nameF'] = $free->nom;
                                        }


                                        $data['mail'] = $fourni['mail'];
                                        // dd($data);
                                        $demandeoffre = $this->fetchTable('Lignedemandeoffredeprixes')->newEmptyEntity();
                                        $demandeoffre = $this->Lignedemandeoffredeprixes->patchEntity($demandeoffre, $data);
                                        if ($this->Lignedemandeoffredeprixes->save($demandeoffre)) {

                                            //                                          debug($demandeoffre);
                                            // $this->Flash->success("demande offre de prix has been created successfully");
                                        }

                                        //
                                        $this->set(compact("demandeoffre"));
                                    }
                                }
                            }
                            // debug($art['designiationA']);die;
                            //  $this->Flash->success(__('The demande offfre has been saved.'));
                            //
                        }
                    }
                    return $this->redirect(['action' => 'index/' . $typeof]);
                } else {
                    // $this->Flash->error(__('The demande offre could not be saved. Please, try again.'));
                }
            }
        }




        //    $ligneas=$this->Lignedemandeoffredeprixes->find('all',array('conditions' => array('Lignedemandeoffredeprixes.demandeoffredeprix_id'=>$id),'group' => array('Lignedemandeoffredeprixes.designiationA')));
        //$lignefs=$this->Lignedemandeoffredeprixes->find('all',array('conditions' => array('Lignedemandeoffredeprixes.demandeoffredeprix_id'=>$id),'group' => array('Lignedemandeoffredeprixes.nameF')));
        //debug($lignefs);die;
        $this->loadModel('Projets');
        $projets = $this->fetchTable('Projets')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
        $fournisseurs = $this->Demandeoffredeprixes->Fournisseurs->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
        $articles = $this->Demandeoffredeprixes->Articles->find('list', ['keyfield' => 'id', 'valueField' => 'Dsignation'])
            ->where(["Articles.vente = 1"]);
        //dd($articles->toArray());
        $this->set(compact('demandeoffredeprix', 'fournisseurs', 'projets', 'articles'));
    }
    public function getmail()
    {
        $id = $this->request->getQuery('fournisseur_id');

        $four = $this->fetchTable('Fournisseurs')->find('all')->where('Fournisseurs.id =' . $id);
        foreach ($four as $f) {
            //dd($f->mail);
            $mail = $f->mail;
        }

        echo json_encode(array("mail" => $mail));
        exit;
    }
    /**
     * Edit method
     *
     * @param string|null $id Demandeoffredeprix id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $session = $this->request->getSession();
        $abrv = $session->read('abrvv');
        $liendd = $session->read('lien_achat' . $abrv);
        //   debug($liendd);
        $dmd = 0;
        foreach ($liendd as $k => $liens) {
            //  debug($liens);
            if (@$liens['lien'] == 'demandeoffredeprixes') {
                $dmd = $liens['modif'];
            }
        }
        // debug($societe);die;
        if (($dmd <> 1)) {
            $this->redirect(array('controller' => 'users', 'action' => 'login'));
        }
        $this->loadModel('Fournisseurs');
        $this->loadModel('Lignedemandeoffredeprixes');
        $this->loadModel('Articles');
        $demandeoffredeprix = $this->Demandeoffredeprixes->get($id, [
            'contain' => ['Lignedemandeoffredeprixes']
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            //dd($this->request->getData());
            $num = $this->Demandeoffredeprixes->find()->select([
                "numdepot" =>
                    'MAX(Demandeoffredeprixes.numero)'
            ])->first();
            $numero = $num->numdepot;
            //  DOF00001
            $n = 0;
            $n = $numero;
            if (!empty($n)) {
                $ff = intval(substr($n, 3, 7)) + 1;
                $z = str_pad("$ff", 5, '0', STR_PAD_LEFT);
                $c = str_pad("$z", 6, 'F', STR_PAD_LEFT);
                $code = str_pad("$c", 7, 'O', STR_PAD_LEFT);
                $b = str_pad("$code", 8, 'D', STR_PAD_LEFT);
            } else {
                $n = "00001";
                $c = str_pad("$n", 6, 'F', STR_PAD_LEFT);
                $code = str_pad("$c", 7, 'O', STR_PAD_LEFT);
                $b = str_pad("$code", 8, 'D', STR_PAD_LEFT);
            }
            $this->set(compact('b'));
            $demandeoffredeprix = $this->Demandeoffredeprixes->patchEntity($demandeoffredeprix, $this->request->getData());
            if ($this->Demandeoffredeprixes->save($demandeoffredeprix)) {
                $dmd_id = ($this->Demandeoffredeprixes->save($demandeoffredeprix)->id);
                $this->misejour("Demandeoffredeprixes", "edit", $dmd_id);

                $demande_id = $demandeoffredeprix->id;
                $lignedemande = $this->Lignedemandeoffredeprixes->find('all', [])
                    ->where(["Lignedemandeoffredeprixes.demandeoffredeprix_id ='" . $id . "'"]);
                foreach ($lignedemande as $c) {
                    $this->Demandeoffredeprixes->Lignedemandeoffredeprixes->delete($c);
                }

                if (isset($this->request->getData('data')['lignef']) && (!empty($this->request->getData('data')['lignef']))) {
                    foreach ($this->request->getData('data')['lignef'] as $j => $fourni) {
                        //                       debug($fourni);
                        if ($fourni['sup1'] != 1) {
                            if ($fourni['fournisseur_id']) {
                                $fr = $this->Fournisseurs->find()->select(["nomfour" => '(Fournisseurs.name)'])->where(["Fournisseurs.id" => $fourni['fournisseur_id']])->first();
                                $frr = $fr->nomfour;
                                $fourni['nameF'] = $frr;
                            } else {
                                $fourni['nameF'] = $fourni['nameF'];
                            }
                            if (isset($this->request->getData('data')['lignea']) && (!empty($this->request->getData('data')['lignea']))) {
                                $this->loadModel('Articles');
                                foreach ($this->request->getData('data')['lignea'] as $i => $art) {
                                    // debug($art);
                                    if ($art['sup0'] != 1) {
                                        if ($art['article_id']) {
                                            $ar = $this->Articles->find()->select(["nomarticle" => '(Articles.Dsignation)'])->where(["Articles.id" => $art['article_id']])->first();
                                            $arr = $ar->nomarticle;
                                            $art['designiationA'] = $arr;
                                        } else {
                                            $art['designiationA'] = $art['designiationA'];
                                        }

                                        $data['demandeoffredeprix_id'] = $id;
                                        $data['article_id'] = $art['article_id'];
                                        $data['designiationA'] = $art['designiationA'];
                                        $data['qte'] = $art['qte'];
                                        $data['fournisseur_id'] = $fourni['fournisseur_id'];
                                        $data['nameF'] = $fourni['nameF'];

                                        $demandeoffre = $this->fetchTable('Lignedemandeoffredeprixes')->newEmptyEntity();
                                        $demandeoffre = $this->Lignedemandeoffredeprixes->patchEntity($demandeoffre, $data);
                                        if ($this->Lignedemandeoffredeprixes->save($demandeoffre)) {
                                        }

                                        //
                                        $this->set(compact("demandeoffre"));
                                    }
                                }
                            }
                            // debug($art['designiationA']);die;
                            //  $this->Flash->success(__('The demande offfre has been saved.'));
                            //
                        }
                    }
                    return $this->redirect(['action' => 'index/' . $demandeoffredeprix['typedemandeoffre']]);
                }
                return $this->redirect(['action' => 'index/' . $demandeoffredeprix['typedemandeoffre']]);
            }
        }
        $articles = $this->Demandeoffredeprixes->Articles->find('list', ['keyfield' => 'id', 'valueField' => 'Dsignation'])
            ->where(["Articles.vente =0"]);
        //debug($articles);
        $fournisseurs = $this->Demandeoffredeprixes->Fournisseurs->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
        $lignefs = $this->Lignedemandeoffredeprixes->find('all', ['keyfield' => 'id', 'valueField' => 'nameF'])
            ->group(["nomfour" => '(Lignedemandeoffredeprixes.nameF)'])
            ->where(["Lignedemandeoffredeprixes.demandeoffredeprix_id  ='" . $id . "'"]);
        $ligneas = $this->Lignedemandeoffredeprixes->find('all', ['keyfield' => 'id', 'valueField' => 'designiationA'])
            ->group(["nomar" => '(Lignedemandeoffredeprixes.designiationA)'])
            ->where(["Lignedemandeoffredeprixes.demandeoffredeprix_id ='" . $id . "'"]);
        $this->loadModel('Projets');
        $projets = $this->fetchTable('Projets')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
        $this->set(compact('ligneas', 'lignefs', 'projets', 'demandeoffredeprix', 'articles', 'fournisseurs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Demandeoffredeprix id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $session = $this->request->getSession();
        $abrv = $session->read('abrvv');
        $liendd = $session->read('lien_achat' . $abrv);
        //   debug($liendd);
        $dmd = 0;
        foreach ($liendd as $k => $liens) {
            //  debug($liens);
            if (@$liens['lien'] == 'demandeoffredeprixes') {
                $dmd = $liens['supp'];
            }
        }
        // debug($societe);die;
        if (($dmd <> 1)) {
            $this->redirect(array('controller' => 'users', 'action' => 'login'));
        }
        $this->loadModel('Lignedemandeoffredeprixes');
        // $this->request->allowMethod(['post', 'delete']);
        $demande = $this->Demandeoffredeprixes->get($id);
        $lignedemande = $this->Lignedemandeoffredeprixes->find('all')
            ->where(["Lignedemandeoffredeprixes.demandeoffredeprix_id  ='" . $id . "'"]);
        foreach ($lignedemande as $c) {
            $this->Demandeoffredeprixes->Lignedemandeoffredeprixes->delete($c);
        }
        if ($this->Demandeoffredeprixes->delete($demande)) {
            $dmd_id = ($this->Demandeoffredeprixes->save($demande)->id);
            $this->misejour("Demandeoffredeprixes", "delete", $dmd_id);
        }


        return $this->redirect(['action' => 'index']);
    }
    public function imprimerrecherche()
    {
        $cond2 = '';
        $cond1 = '';
        $cond3 = '';
        $numero = $this->request->getQuery('numero');
        $datedebut = $this->request->getQuery('datedebut');
        $datefin = $this->request->getQuery('datefin');
        if ($numero) {
            $cond1 = "Demandeoffredeprixes.numero  ='" . $numero . "'";
        }
        if ($datedebut) {
            $cond2 = "Demandeoffredeprixes.date ='" . $datedebut . "'";
            debug($datedebut);
            debug($cond2);
        }
        if ($datefin) {
            $cond3 = "Demandeoffredeprixes.date ='" . $datefin . "'";
        }

        //echo $cond1.'-'. $cond2.$cond3;
        $query = $this->Demandeoffredeprixes->find('all')->where([$cond1, $cond2, $cond3]);
        debug($query->Toarray());
        $recherches = $this->paginate($query);
        $demandeoffredeprixes = $this->paginate($this->Demandeoffredeprixes);
        $this->set(compact('demandeoffredeprixes', 'recherches'));
        //debug($recherches);//die();
    }
    public function bandeconsultation($id = null)
    {
        $this->loadModel('Demandeoffredeprixes');
        $this->loadModel('Lignedemandeoffredeprixes');
        $this->loadModel('Articles');
        $this->loadModel('Fournisseurs');
        $this->loadModel('Bandeconsultations');
        $this->loadModel('Lignebandeconsultations');
        $this->loadModel('LiU23PChmx7WARsRfzvsE1LPt3TBxKJBPs');
        if (!$this->Demandeoffredeprixes->exists($id)) {
            throw new NotFoundException(__('Invalid demandeoffredeprix'));
        }
        $demandeoffredeprix = $this->Demandeoffredeprixes->get($id, [
            'contain' => ['Lignedemandeoffredeprixes']
        ]);
        if ($this->request->is('post') || $this->request->is('put')) {
            $data['demandeoffredeprix_id'] = $this->request->getData()['id'];
            if (isset($this->request->getData('data')['fligne']) && (!empty($this->request->getData('data')['fligne']))) {
                foreach ($this->request->getData('data')['fligne'] as $j => $fourni) {
                    //debug($fourni['fournisseur_id']);die;
                    $data['fournisseur_id'] = $fourni['fournisseur_id'];
                    $data['nameF'] = $fourni['nameF'];
                    $data['t'] = $fourni['t'];
                    if (isset($this->request->getData('data')['fligne'][$j]['aligne']) && (!empty($this->request->getData('data')['fligne'][$j]['aligne']))) {
                        foreach ($this->request->getData('data')['fligne'][$j]['aligne'] as $i => $art) {
                            $data['article_id'] = $art['article_id'];
                            $data['designiationA'] = $art['designiationA'];
                            $data['qte'] = $art['qte'];
                            $data['prix'] = $art['prix'];
                            $data['totalprix'] = $art['total'];
                            $data['ht'] = $art['total'];
                            $data['lignedemandeoffredeprix_id'] = $art['ligne_id'];
                            $data['codefrs'] = $art['codefrs'];
                            $bande = $this->fetchTable('Bandeconsultations')->newEmptyEntity();
                            $bande = $this->Bandeconsultations->patchEntity($bande, $data);
                            if ($this->Bandeconsultations->save($bande)) {
                                $bande_id = ($this->Bandeconsultations->save($bande)->id);
                                $this->misejour("Bandeconsultations", "add", $bande_id);

                                //$this->Flash->success("Bandeconsultation offre de prix has been created successfully");
                            } else {
                                //$this->Flash->error("Failed to create Bandeconsultation offre de prix");
                            }
                            $this->set(compact("bande"));
                            $data['bandeconsultation_id'] = $bande->id;
                            //debug( $data['bandeconsultation_id']);die;
                            $lignebande = $this->fetchTable('Lignebandeconsultations')->newEmptyEntity();
                            $lignebande = $this->Lignebandeconsultations->patchEntity($lignebande, $data);
                            if ($this->Lignebandeconsultations->save($lignebande)) {

                                //debug($id);die;
                                //    $this->loadModel('Demandeoffredeprixes');
                                //  //  debug($id);die;
                                //            $dmd = $this->Demandeoffredeprixes->find('all')
                                //                    ->where(["Demandeoffredeprixes.id='" .$id. "'"])->update()
                                //                    ->set(['consultation' => '1'])
                                //                    ->execute
                                //                            $this->Demandeoffredeprixes->id = $id;
                                // $articlesTable = TableRegistry::getTableLocator()->get('Demandeoffredeprixes');
                                $article = $this->Demandeoffredeprixes->get($id);
                                $article->consultation = '1';
                                $this->Demandeoffredeprixes->save($article);
                                $demande_id = ($this->Demandeoffredeprixes->save($article)->id);
                                $this->misejour("Demandeoffredeprixes", "update", $demande_id);




                                //            $dmd = $this->Demandeoffredeprixes->find('all')
                                //                    ->where(["Demandeoffredeprixes.id='" . $id . "'"])->update()
                                //                    ->set(['consultation' => '1'])
                                //                    ->execute();
                                //$this->Flash->success("Lignebandeconsultations offre de prix has been created successfully");
                            } else {
                                // $this->Flash->error("Failed to create Lignebandeconsultations offre de prix");
                            }
                            $this->set(compact("lignebande"));
                        }
                    }
                    //$data['lignebandeconsultation_id']=$lignebande->id;

                    $ligneligne = $this->fetchTable('LiU23PChmx7WARsRfzvsE1LPt3TBxKJBPs')->newEmptyEntity();
                    $ligneligne = $this->LiU23PChmx7WARsRfzvsE1LPt3TBxKJBPs->patchEntity($ligneligne, $data);
                    if ($this->LiU23PChmx7WARsRfzvsE1LPt3TBxKJBPs->save($ligneligne)) {
                    } else {
                        // $this->Flash->error("Failed to create Lignelignebandeconsultation offre de prix");
                    }
                    $this->set(compact("ligneligne"));
                }
            }






            $this->redirect(array('action' => 'etatcomparatif', $id));
        } else {
            //$options = array('conditions' => array('Demandeoffredeprixes.' . $this->Demandeoffredeprixes->primaryKey => $id));
            //$this->request->getData = $this->Demandeoffredeprixes->find('first', $options);
        }


        $ligneas = $this->Lignedemandeoffredeprixes->find('all', ['keyfield' => 'id', 'valueField' => 'designiationA'])
            ->group(["nomar" => '(Lignedemandeoffredeprixes.designiationA)'])
            ->where(["Lignedemandeoffredeprixes.demandeoffredeprix_id ='" . $id . "'"]);

        // debug($ligneas);die;




        $lignefs = $this->Lignedemandeoffredeprixes->find('all', ['keyfield' => 'id', 'valueField' => 'nameF'])
            ->group(["nomfour" => '(Lignedemandeoffredeprixes.nameF)'])
            ->where(["Lignedemandeoffredeprixes.demandeoffredeprix_id  ='" . $id . "'"]);
        //debug($lignefs);die();



        $fournisseurs = $this->Fournisseurs->find('list');
        $demandes = $this->Demandeoffredeprixes->find()
            ->select(["dm" => '(Demandeoffredeprixes.id)'])
            ->where(["Demandeoffredeprixes.id ='" . $id . "'"])->first();

        $type = $this->Demandeoffredeprixes->find()
            ->select(["typeoffredeprix" => '(Demandeoffredeprixes.typeoffredeprix)'])
            ->where(["Demandeoffredeprixes.id ='" . $id . "'"])->first();
        $typedem = $type['typeoffredeprix'];
        //debug($demandes);die;

        $articles = $this->Articles->find('list', array('fields' => array('Articles.designiation')));
        //		$fournisseurs=$this->Fournisseur->find('list');
        $this->set(compact('articles', 'demandes', 'typedem', 'fournisseurs', 'ligneas', 'lignefs', 'demandeoffredeprix'));
    }

    //etat comparatif pour passer une commande c'est pourquoi le numero sera le numero de la commande

    public function etatcomparatif($id = null)
    {

        $this->loadModel('Demandeoffredeprixes');
        $this->loadModel('Lignedemandeoffredeprixes');
        $this->loadModel('Articles');
        $this->loadModel('Fournisseurs');
        $this->loadModel('Commandefournisseurs');
        $this->loadModel('Lignecommandefournisseurs');
        $this->loadModel('Fournisseurs');
        $this->loadModel('Lignedemandeoffredeprixes');
        $this->loadModel('Bandeconsultations');
        $this->loadModel('Lignebandeconsultations');
        $this->loadModel('LiU23PChmx7WARsRfzvsE1LPt3TBxKJBPs');
        $this->loadModel('Articlefournisseurs');
        $this->loadModel('Projets');
        $demandes = $this->Demandeoffredeprixes->find()
            ->select(["dm" => '(Demandeoffredeprixes.id)'])
            ->where(["Demandeoffredeprixes.id  ='" . $id . "'"])->first();
        // debug($demandes);die;


        $type = $this->Demandeoffredeprixes->find()
            ->select(["typeoffredeprix" => '(Demandeoffredeprixes.typeoffredeprix)'])
            ->where(["Demandeoffredeprixes.id ='" . $id . "'"])->first();
        $projet = $this->Demandeoffredeprixes->find()
            ->select(["projet" => '(Demandeoffredeprixes.projet_id)'])
            ->where(["Demandeoffredeprixes.id ='" . $id . "'"])->first();

        // dd($valide);
        $typedem = $type['typeoffredeprix'];

        $pp = $projet['projet'];
        $date = $this->Demandeoffredeprixes->find()
            ->select(["date" => '(Demandeoffredeprixes.date)'])
            ->where(["Demandeoffredeprixes.id ='" . $id . "'"])->first();
        //debug($date);die;

        $commande = $this->Commandefournisseurs->newEmptyEntity();

        $num = $this->Commandefournisseurs->find()->select([
            "numcmd" =>
                'MAX(Commandefournisseurs.numero)'
        ])->first();
        $numero = $num->numcmd;

        $n = $numero;

        if (!empty($n)) {

            $ff = intval(substr($n, 3, 7)) + 1;
            $d = str_pad("$ff", 5, '0', STR_PAD_LEFT);
            $c = str_pad("$d", 6, 'C', STR_PAD_LEFT);
            // debug( $c);die;
        } else {
            $n = "00001";
            $c = str_pad("$n", 6, 'C', STR_PAD_LEFT);
            //debug( $c);die;
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            //  dd($this->request->getData());
            // $commande = $this->Commandefournisseurs->patchEntity($commande, $this->request->getData());
            $comd = $this->fetchTable('Commandefournisseurs')->newEmptyEntity();
            $data['demandeoffredeprix_id'] = $id;
            $data['projet_id'] = $this->request->getData('projet_id');
            $data['numero'] = $this->request->getData('numero');
            $data['date'] = $this->request->getData('date');

            $comd = $this->Commandefournisseurs->patchEntity($comd, $data);
            // dd($comd);
            if ($this->Commandefournisseurs->save($comd)) {
                $validechamp = $this->fetchTable('Projets')->find('all')->where('Projets.id = ' . $projet->projet)->first();

                $validechamp->valide = 1;

                // $valide = $this->Projets->patchEntity($validechamp, $validechamp);
                $this->Projets->save($validechamp);
                // dd($validechamp);

                if (isset($this->request->getData('data')['fligne']) && (!empty($this->request->getData('data')['fligne']))) {
                    foreach ($this->request->getData('data')['fligne'] as $j => $fourni) {
                        // dd($fourni);

                        if (!empty($fourni['check'])) {
                            if ($fourni['check'] == 1) {
                                $data['numero'] = $this->request->getData('numero');

                                $data['t'] = $fourni['t'];
                                $data['name'] = $fourni['nameF'];
                                $data['date'] = date('d-m-y');

                                if (!$fourni['id']) {
                                    //debug("pas d'id");
                                    $dat = $this->fetchTable('Fournisseurs')->newEmptyEntity();
                                    $dat['name'] = $fourni['nameF'];
                                    if ($this->Fournisseurs->save($dat)) {
                                        $fournisseur_id = ($this->Fournisseurs->save($dat)->id);
                                        $this->misejour("Fournisseurs", "add", $fournisseur_id);

                                        $fournisseur_id = $dat->id;
                                        $data['fournisseur_id'] = $fournisseur_id;
                                        // $dataligne['fournisseur_id'] =$fournisseur_id;
                                    }
                                } else {
                                    $data['fournisseur_id'] = $fourni['id'];
                                    //$dataligne['fournisseur_id'] = $fourni['id'];
                                }



                                //debug($data);

                            }
                        }
                    }
                }
            }





            if (isset($this->request->getData('data')['lignefourn']) && (!empty($this->request->getData('data')['lignefourn']))) {
                foreach ($this->request->getData('data')['lignefourn'] as $j => $fourniss) {
                    $datx = $this->fetchTable('Commandefournisseurs')->newEmptyEntity();




                    $num = $this->Commandefournisseurs->find()->select([
                        "numdepot" =>
                            'MAX(Commandefournisseurs.numero)'
                    ])->first();
                    $numero = $num->numdepot;
                    // debug($numero);die;

                    // C00030

                    $n = 0;
                    $n = $numero;

                    if (!empty($n)) {
                        $ff = intval(substr($n, 3, 7)) + 1;
                        $z = str_pad("$ff", 5, '0', STR_PAD_LEFT);
                        $b = str_pad("$z", 6, 'C', STR_PAD_LEFT);
                        //debug($b);
                    } else {
                        $n = "C00001";
                        $z = str_pad(" $n", 5, '0', STR_PAD_LEFT);
                        $b = str_pad("$z", 6, 'C', STR_PAD_LEFT);
                    }



                    if (!empty($fourniss['c'])) {
                        if ($fourniss['c'] == 1) {
                            $data['numero'] = $this->request->getData('numero');

                            $data['name'] = $fourniss['nameF'];
                            $data['date'] = date('d-m-y');
                            if (!$fourniss['id']) {
                                $data = $this->fetchTable('Fournisseurs')->newEmptyEntity();
                                $data['name'] = $fourniss['nameF'];
                                if ($this->Fournisseurs->save($data)) {
                                    $frs_id = ($this->Fournisseurs->save($data)->id);
                                    $this->misejour("Fournisseurs", "add", $frs_id);

                                    $fournisseur_id = $data->id;
                                    $data['fournisseur_id'] = $fournisseur_id;
                                    $datx['fournisseur_id'] = $fournisseur_id;
                                    $dattt['fournisseur_id'] = $fournisseur_id;
                                }
                            } else {
                                $data['fournisseur_id'] = $fourniss['id'];
                                $datx['fournisseur_id'] = $fourniss['id'];
                                $dattt['fournisseur_id'] = $fourniss['id'];
                            }


                            $datx['numero'] = $b;
                            $datx['date'] = date('y-m-d');
                            $datx['projet_id'] = $data['numero'] = $this->request->getData('projet_id');;
                            $datx['demandeoffredeprix_id'] = $id;
                            if ($this->Commandefournisseurs->save($datx)) {
                                $cmd_id = ($this->Commandefournisseurs->save($datx)->id);
                                $this->misejour("Commandefournisseurs", "add", $cmd_id);

                                $comd_id = $datx['id'];


                                if (isset($this->request->getData('data')['lignefourn'][$j]['ligneart']) && (!empty($this->request->getData('data')['lignefourn'][$j]['ligneart']))) {
                                    foreach ($this->request->getData('data')['lignefourn'][$j]['ligneart'] as $i => $arti) {
                                        $datz = $this->fetchTable('Articles')->newEmptyEntity();
                                        $dattt = $this->fetchTable('Lignecommandefournisseurs')->newEmptyEntity();
                                        if ($arti['check2']) {
                                            $data['date'] = $this->request->getData('date');
                                            $lbc = $this->Lignebandeconsultations->find()->where(["Lignebandeconsultations.id = '" . $arti['ligne_id'] . "' "])->first();
                                            $data['designiation'] = $arti['designiationA'];
                                            if (!$arti['article_id']) {

                                                $datz['Dsignation'] = $arti['designiationA'];
                                                $datz['typearticle_id'] = 2;
                                                // debug($datz);
                                                if ($this->Articles->save($datz)) {
                                                    $article_id = ($this->Articles->save($datz)->id);
                                                    $this->misejour("Articles", "add", $article_id);
                                                    $data['article_id'] = $ar['id'];
                                                    $data['article_id'] = $datz['id'];
                                                    $dattt['article_id'] = $datz['id'];
                                                }
                                            } else {
                                                $data['article_id'] = $arti['article_id'];
                                                $dattt['article_id'] = $arti['article_id'];
                                            }
                                            $data['code'] = $lbc['codefrs'];
                                            $data['prix'] = $arti['prix'];

                                            //  $artfr = $this->fetchTable('Articlefournisseurs')->newEmptyEntity();
                                            // $artfr = $this->Articlefournisseurs->patchEntity($artfr, $data);

                                            //                                            if ($this->Articlefournisseurs->save($artfr)) {
                                            //
                                            //                                            }
                                            //                                            else {
                                            //
                                            //                                            }
                                            $dattt['codefrs'] = $lbc['codefrs'];
                                            $dattt['qte'] = $arti['qte'];
                                            $dattt['prix'] = $arti['prix'];
                                            $dattt['ht'] = $arti['ht'];
                                            $dattt['commandefournisseur_id'] = $comd_id;
                                            // debug($dattt);
                                            // $data['numero'] = $this->request->getData('mm');


                                            if ($this->Lignecommandefournisseurs->save($dattt)) {

                                                $article = $this->Demandeoffredeprixes->get($id);
                                                $article->commande = '1';
                                                //debug($article);
                                                $this->Demandeoffredeprixes->save($article);
                                                $dmd_id = ($this->Demandeoffredeprixes->save($article)->id);
                                                $this->misejour("Demandeoffredeprixes", "update", $dmd_id);
                                            } else {
                                                $this->Flash->error("Failed to create Lignecommandefournisseurs offre de prix");
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }








            $this->redirect(array('controller' => 'commandefournisseurs', 'action' => 'index'));
        }



        $fournisseurs = $this->LiU23PChmx7WARsRfzvsE1LPt3TBxKJBPs->find('all', ['keyfield' => 'id', 'valueField' => 'nameF'])
            ->group(["namef" => '(LiU23PChmx7WARsRfzvsE1LPt3TBxKJBPs.nameF)'])
            ->where(["LiU23PChmx7WARsRfzvsE1LPt3TBxKJBPs.demandeoffredeprix_id  ='" . $id . "'"]);
        //        debug($fournisseurs);


        $articles = $this->Bandeconsultations->find('all', ['keyfield' => 'id', 'valueField' => 'designiationA'])
            ->group(["art" => '(Bandeconsultations.designiationA)'])
            ->where(["Bandeconsultations.demandeoffredeprix_id = '" . $id . "'"]);
        //  debug($articles);
        $tab = array();
        $tab1 = array();
        foreach ($fournisseurs as $frs) {
            //debug($frs);
            $idfrs = $frs['fournisseur_id'];
            $namefrs = $frs['nameF'];
            //echo($namefrs);die;

            foreach ($articles as $art) {
                //debug($art);die;
                $idart = $art['article_id'];
                $iddemande = $art['demandeoffredeprix_id'];
                $artdes = $art['designiationA'];

                $donnes = $this->Lignebandeconsultations->find()
                    ->where(["Lignebandeconsultations.nameF = '" . $namefrs . "'"])
                    ->where(["Lignebandeconsultations.demandeoffredeprix_id  = '" . $iddemande . "'"])
                    ->where(["Lignebandeconsultations.designiationA = '" . $artdes . "'"]);
                //debug($donnes);die;


                $pr = $this->Lignebandeconsultations->find('all')
                    ->select(["ht" => '(Lignebandeconsultations.ht)'])
                    ->where(["Lignebandeconsultations.demandeoffredeprix_id = '" . $iddemande . "'"])
                    ->where(["Lignebandeconsultations.designiationA = '" . $artdes . "'"])
                    ->order(["Lignebandeconsultations.ht"]);

                //debug($pr);die;

                $tab[$idfrs][$idart] = $donnes;
                $tab1[$idfrs][$idart] = $pr;
                // debug($tab1);
            }
        }









        $lignefs = $this->LiU23PChmx7WARsRfzvsE1LPt3TBxKJBPs->find('all')
            ->group(["nomfour" => '(LiU23PChmx7WARsRfzvsE1LPt3TBxKJBPs.nameF)'])
            ->where(["LiU23PChmx7WARsRfzvsE1LPt3TBxKJBPs.demandeoffredeprix_id = '" . $id . "'"])
            ->order(["LiU23PChmx7WARsRfzvsE1LPt3TBxKJBPs.t"]);
        $d = array();

        $o = 0;

        foreach ($lignefs as $o => $lf) {
            $ligneas = $this->Lignebandeconsultations->find('all', ['keyfield' => 'id', 'valueField' => 'designiationA'])
                //->select(["nameF"=>'(Lignebandeconsultations.designiationA)'])
                ->group(["nomar" => '(Lignebandeconsultations.designiationA)'])
                ->where(["Lignebandeconsultations.demandeoffredeprix_id ='" . $id . "'"])
                ->where(["Lignebandeconsultations.nameF  ='" . $lf['nameF'] . "'"]);
            //            debug($ligneas);
            //$ta[$o]=$lf;
            $n = 0;
            // $d=array();

            foreach ($ligneas as $n => $la) {
                $d[$o][$n] = $la;
                //debug($d);
            }
        }

        $this->loadModel('Projets');
        $projets = $this->fetchTable('Projets')->find('list', ['keyfield' => 'id', 'valueField' => 'name']);
        $this->set(compact('tab', 'pp', 'projets', 'typedem', 'tab1', 'fournisseurs', 'd', 'demandes', 'c', 'articles', 'commande', 'date', 'lignefs', 'ligneas'));
    }


    public function imprimer($id)
    {

        $this->loadModel('Articles');
        $this->loadModel('Fournisseurs');
        $this->loadModel('Lignedemandeoffredeprixes');

        if (!$this->Demandeoffredeprix->exists($id)) {
            throw new NotFoundException(__('Invalid demandeoffredeprix'));
        }
        $ligneas = $this->Lignedemandeoffredeprixes->find('all', ['keyfield' => 'id', 'valueField' => 'designiationA'])
            ->group(["nomar" => '(Lignedemandeoffredeprixes.designiationA)'])
            ->where(["Lignedemandeoffredeprixes.demandeoffredeprix_id  ='" . $id . "'"]);

        $lignefs = $this->Lignedemandeoffredeprixes->find('all', ['keyfield' => 'id', 'valueField' => 'nameF'])
            ->group(["nomfour" => '(Lignedemandeoffredeprixes.nameF)'])
            ->where(["Lignedemandeoffredeprixes.demandeoffredeprix_id ='" . $id . "'"]);

        //$nb=$this->Lignedemandeoffredeprixes->find('count',array('conditions' => array('Lignedemandeoffredeprix.demandeoffredeprix_id'=>$id),'group' => array('Lignedemandeoffredeprix.nameF')));
        $demandeoffredeprix = $this->Demandeoffredeprixes->find()
            ->where(["Demandeoffredeprixes.demandeoffredeprix_id  ='" . $id . "'"])
            ->first();

        $this->set(compact('nb', 'articles', 'fournisseurs', 'ligneas', 'lignefs', 'demandeoffredeprix'));
    }
}
