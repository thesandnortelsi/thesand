<?php
namespace App\Controller;

// use Cake\Http\Session\CacheSession;

// use Cake\Auth\Storage\StorageInterface;

use  Cake\View\Helper\SessionHelpe;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('dashboard');

        $this->paginate = [
            'contain' => ['Persons']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');

        $user = $this->Users->get($id, [
            'contain' => ['Persons', 'Rols']
        ]);

        if (!empty($user->user_created)) 
        {
            $creo = $this->Users->get($user->user_created);
        }
        if (!empty($user->user_modified)) 
        {
            $modifico = $this->Users->get($user->user_modified);
        }

        $persons = $this->Users->Persons->find('list', ['limit' => 200]);
        $rols = $this->Users->Rols->find('list', ['limit' => 200]);

        $this->set(compact('user', 'creo', 'modifico', 'persons', 'rols'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('dashboard');

        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $persons = $this->Users->Persons->find('list', ['limit' => 200]);
        $rols = $this->Users->Rols->find('list', ['limit' => 200]);
        $this->set(compact('user', 'persons', 'rols'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('dashboard');

        $user = $this->Users->get($id, [
            'contain' => ['Rols']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $persons = $this->Users->Persons->find('list', ['limit' => 200]);
        $rols = $this->Users->Rols->find('list', ['limit' => 200]);
        $this->set(compact('user', 'persons', 'rols'));
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
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        if ($this->request->is('post')) 
        {
            $user = $this->Auth->identify();
            if ($user) 
            {
                $this->Auth->setUser($user);
                
                //Session::write($key, $value)
                //Session::write('proyect_id', 2);

                $session = $this->getRequest()->getSession();
                $session->write('proyect_name', 'EXPLORACION DE TIERRAS Y MOVIMIENTOS');
                $session->write('proyect_id', 1);


                return $this->redirect($this->Auth->redirectUrl());
                
                
                // $session->write('Config.proyect_name', 'Mi primer proyecto');
                // $session->write('Config.language', 'en');

            }
            else
            {
                $this->Flash->error('Ingrese usuario y/o contrasena correctos', ['key' => 'auth']);
            }
        }
    }

    public function home()
    {
        $this->render();
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function usrById($id) 
    {
        return $this->Users->get($id);
    }

    public function isAuthorized($user)
    {
        $modulo = "usuarios";

        if (isset($user['rol_id']) && $user['rol_id'] == 1) 
        {
            return true;
        }

        return false;
    }
}
