<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function getlogin()
    {
        if ($this->request->is('ajax')) {
            $idlogin = $_GET['login'];
            $ligne = $this->fetchTable('Users')->find('all')
                ->where(["Users.login  ='" . $idlogin . "'"]);

            foreach ($ligne as $li) {
                // debug($li);die;
                $log = $li['login'];
            }

            $test = 0;
            if ($log != '') {
                $test = 1;
            }
            echo json_encode(array("ligne" => $test, "success" => true));
            exit;
        }
        die;
    }
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions(['login', 'add']);
    }
    public function logout()
    {
        $result = $this->Authentication->getResult();
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
    }
    public function login($origin = null)
    {
        $this->loadModel('Accueils');
        $this->loadModel('Users');
        $this->loadModel('Liens');
        $this->loadModel('Menus');
        $this->loadModel('Utilisateurmenus');
        $acc = $this->Accueils->find('all', ['keyfield' => 'id', 'valueField' => 'name']);
        foreach ($acc as $ac) {
            $abrv = $ac['name'];
        }
        $session = $this->request->getSession();
        $session->delete('lien_parametrage' . $abrv);
        $session->delete('users' . $abrv);
        $session->delete('parametrage' . $abrv);
        $this->layout = null;
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        if ($result && $result->isValid()) {
            $identity = $this->Authentication->getIdentity();
            $user = $identity->getOriginalData();
            $session = $this->request->getSession();
            $session->write('user', $user->id);
            $session->write('poste', $user->poste);
            $us = $user['utilisateur_id'];
            $id = $user['id'];
            // $this->loadModel('Utilisateurs');
            // $utilisateurr = $this->Utilisateurs->find('all', ['recursive' => 0, 'conditions' => ['Utilisateurs.id' => $us]]);
            // foreach ($utilisateurr as $utilisateur) {
            //     if ($utilisateur != []) {
            //         $session = $this->request->getSession();
            //         $idutili = $utilisateur['id'];
            //         $session->write('users' . $abrv, $idutili);
            //         $session->write('abrvv', $abrv);
            //         $this->loadModel('Utilisateurmenus');
            //         $utilisateurmenu = $this->Utilisateurmenus->find('all')->where(['Utilisateurmenus.utilisateur_id' => $idutili]);
            //         $var = '';
            //         foreach ($utilisateurmenu as $utili) {
            //             $idu = $utili['id'];

            //             if ($utili['menu_id'] == 2) {
            //                 $menu12 = $this->Liens->find('all')->where(['Liens.utilisateurmenu_id' => $idu]);
            //                 foreach ($menu12 as $m => $menu) {
            //                     $pan2[$m] = $menu;
            //                 }
            //                 $var = 'parametrage' . $abrv;
            //                 $session->write('parametrage' . $abrv, 'par');
            //                 $session->write('parametrage' . $abrv, 'par');
            //                 $session->write('lien_parametrage' . $abrv, $pan2);
            //             }
            //         }
            //         $session->write('defaultmenu', $var);
            //         if ($origin != 1) {
            //             $this->redirect(['controller' => 'Accueils', 'action' => 'index']);
            //         }
            //     }
            // }
            $redirect = $this->request->getQuery('redirect', ['controller' => 'Accueils', 'action' => 'index']);
            return $this->redirect($redirect);
        }
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('The email address or password is incorrect.'));
        }
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        error_reporting(E_ERROR | E_PARSE);
        $personnel_id = $this->request->getQuery('personnel_id');
        $utilisateur_id = $this->request->getQuery('utilisateur_id');
        $cond1 = '';
        $cond2 = '';
        if ($personnel_id) {
            $cond1 = "Users.personnel_id like  '%" . $personnel_id . "%' ";
        }
        if ($utilisateur_id) {
            $cond2 = "Users.utilisateur_id like  '%" . $utilisateur_id . "%' ";
        }
        $query = $this->Users->find('all')->where([$cond1, $cond2])->order(["Users.id" => 'desc']);
        $this->paginate = [
            'contain' => ['Personnels', 'Utilisateurs'],
        ];
        //  debug($query);
        // die;
        $users = $this->paginate($query);
        $personnels = $this->Users->Personnels->find('all');
        $utilisateurs = $this->Users->Utilisateurs->find('list', ['limit' => 200]);
        $this->set(compact('users', 'personnels', 'utilisateurs'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {


        $personnels = $this->Users->Personnels->find('all');
        $utilisateurs = $this->Users->Utilisateurs->find('list', ['limit' => 200]);
        $this->set(compact('user', 'personnels', 'utilisateurs'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                // debug($user);
                $user_id = ($this->Users->save($user)->id);
                $this->misejour("المستخدم", "إضافة", $user_id);
                return $this->redirect(['action' => 'index']);
            }
        }
        $personnels = $this->Users->Personnels->find('all');
        $utilisateurs = $this->Users->Utilisateurs->find('list', ['limit' => 200]);
        $this->set(compact('user', 'personnels', 'utilisateurs'));
    }


    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

        // debug($user);
        // die;
        if (($user <> 1)) {
            $this->redirect(array('controller' => 'users', 'action' => 'login'));
        }
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $user_id = ($this->Users->save($user)->id);
                $this->misejour("المستخدم", "تعديل", $user_id);
                return $this->redirect(['action' => 'index']);
            }
        }
        $personnels = $this->Users->Personnels->find('all');
        $utilisateurs = $this->Users->Utilisateurs->find('list', ['limit' => 200]);
        $this->set(compact('user', 'personnels', 'utilisateurs'));
    }


    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {

        // debug($user);
        // die;
        if (($user <> 1)) {
            $this->redirect(array('controller' => 'users', 'action' => 'login'));
        }
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $user_id = ($this->Users->save($user)->id);
            $this->misejour("المستخدم", "حذف", $user_id);
        } else {
        }

        return $this->redirect(['action' => 'index']);
    }
}
