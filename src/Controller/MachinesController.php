<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Machines Controller
 *
 * @property \App\Model\Table\MachinesTable $Machines
 *
 * @method \App\Model\Entity\Machine[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MachinesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Areas', 'Models', 'Groups']
        ];
        $machines = $this->paginate($this->Machines);

        $this->set(compact('machines'));
    }

    /**
     * View method
     *
     * @param string|null $id Machine id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $machine = $this->Machines->get($id, [
            'contain' => ['Areas', 'Models', 'Groups']
        ]);

        if (!empty($machine->user_created)) 
        {
            $creo = (new UsersController())->usrById($machine->user_created);
        }
        if (!empty($machine->user_modified)) 
        {
            $modifico = (new UsersController())->usrById($machine->user_modified);
        }

        $this->set(compact('machine', 'creo', 'modifico'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $machine = $this->Machines->newEntity();
        if ($this->request->is('post')) {
            $machine = $this->Machines->patchEntity($machine, $this->request->getData());

            $machine->user_created = $this->Auth->user('user_id');

            if ($this->Machines->save($machine)) {
                $this->Flash->success(__('La Máquina ha sido guardada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La Máquina no pudo ser guardada. Por favor, inténtelo nuevamente.'));
        }
        $areas = $this->Machines->Areas->find('list', ['limit' => 200]);
        $models = $this->Machines->Models->find('list', ['limit' => 200]);
        $groups = $this->Machines->Groups->find('list', ['limit' => 200]);
        $this->set(compact('machine', 'areas', 'models', 'groups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Machine id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $machine = $this->Machines->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $machine = $this->Machines->patchEntity($machine, $this->request->getData());

            $machine->user_modified = $this->Auth->user('user_id');

            if ($this->Machines->save($machine)) {
                $this->Flash->success(__('La Máquina ha sido guardada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La Máquina no pudo ser guardada. Por favor, inténtelo nuevamente.'));
        }
        $areas = $this->Machines->Areas->find('list', ['limit' => 200]);
        $models = $this->Machines->Models->find('list', ['limit' => 200]);
        $groups = $this->Machines->Groups->find('list', ['limit' => 200]);
        $this->set(compact('machine', 'areas', 'models', 'groups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Machine id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $machine = $this->Machines->get($id);
        if ($this->Machines->delete($machine)) {
            $this->Flash->success(__('La Máquina ha sido eliminada.'));
        } else {
            $this->Flash->error(__('La Máquina no pudo ser eliminada. Por favor, inténtelo nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}