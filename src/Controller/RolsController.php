<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Rols Controller
 *
 * @property \App\Model\Table\RolsTable $Rols
 *
 * @method \App\Model\Entity\Rol[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RolsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('dashboard');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $rols = $this->paginate($this->Rols);

        $this->set(compact('rols'));
    }

    /**
     * View method
     *
     * @param string|null $id Rol id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rol = $this->Rols->get($id, [
            'contain' => ['Functionalities']
        ]);

        if (!empty($rol->user_created)) 
        {
            $creo = (new UsersController())->usrById($rol->user_created);
        }
        if (!empty($rol->user_modified)) 
        {
            $modifico = (new UsersController())->usrById($rol->user_modified);
        }
        $functionalities = $this->Rols->Functionalities->find('list', ['limit' => 200]);

        $this->set(compact('rol', 'creo', 'modifico', 'functionalities'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rol = $this->Rols->newEntity();
        if ($this->request->is('post')) {
            $rol = $this->Rols->patchEntity($rol, $this->request->getData());
            if ($this->Rols->save($rol)) {
                $this->Flash->success(__('The rol has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rol could not be saved. Please, try again.'));
        }
        $functionalities = $this->Rols->Functionalities->find('list', ['limit' => 200]);
        $this->set(compact('rol', 'functionalities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rol id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rol = $this->Rols->get($id, [
            'contain' => ['Functionalities']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rol = $this->Rols->patchEntity($rol, $this->request->getData());
            if ($this->Rols->save($rol)) {
                $this->Flash->success(__('The rol has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rol could not be saved. Please, try again.'));
        }
        $functionalities = $this->Rols->Functionalities->find('list', ['limit' => 200]);
        $this->set(compact('rol', 'functionalities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rol id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rol = $this->Rols->get($id);
        if ($this->Rols->delete($rol)) {
            $this->Flash->success(__('The rol has been deleted.'));
        } else {
            $this->Flash->error(__('The rol could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
