<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Groups Controller
 *
 *
 * @method \App\Model\Entity\Group[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GroupsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $groups = $this->paginate($this->Groups);

        $this->set(compact('groups'));
    }

    /**
     * View method
     *
     * @param string|null $id Group id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $group = $this->Groups->get($id, [
            'contain' => []
        ]);

        if (!empty($group->user_created)) 
        {
            $creo = (new UsersController())->usrById($group->user_created);
        }
        if (!empty($group->user_modified)) 
        {
            $modifico = (new UsersController())->usrById($group->user_modified);
        }
        
        $this->set(compact('group', 'creo', 'modifico'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $group = $this->Groups->newEntity();
        if ($this->request->is('post')) {
            $group = $this->Groups->patchEntity($group, $this->request->getData());

            $group->user_created = $this->Auth->user('user_id');

            if ($this->Groups->save($group)) {
                $this->Flash->success(__('La Linea ha sido creada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La Linea no pudo ser guardada. Por favor, inténtelo nuevamente.'));
        }
        $this->set(compact('group'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Group id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $group = $this->Groups->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $group = $this->Groups->patchEntity($group, $this->request->getData());

            $group->user_modified = $this->Auth->user('user_id');

            if ($this->Groups->save($group)) {
                $this->Flash->success(__('La linea ha sido creada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La Linea no pudo ser guardada. Por favor, inténtelo nuevamente.'));
        }
        $this->set(compact('group'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Group id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $group = $this->Groups->get($id);
        if ($this->Groups->delete($group)) {
            $this->Flash->success(__('La Linea ha sido eliminada.'));
        } else {
            $this->Flash->error(__('La Linea no pudo ser eliminada. Por favor, inténtelo nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
