<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contracttypes Controller
 *
 * @property \App\Model\Table\ContracttypesTable $Contracttypes
 *
 * @method \App\Model\Entity\Contracttype[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContracttypesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('maintenance');
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $contracttypes = $this->paginate($this->Contracttypes);

        $this->set(compact('contracttypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Contracttype id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contracttype = $this->Contracttypes->get($id, [
            'contain' => ['Employeeworkinformations']
        ]);

        $this->set('contracttype', $contracttype);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contracttype = $this->Contracttypes->newEntity();
        if ($this->request->is('post')) {
            $contracttype = $this->Contracttypes->patchEntity($contracttype, $this->request->getData());
            $contracttype->user_created = $this->Auth->user('id');

            if ($this->Contracttypes->save($contracttype)) {
                $this->Flash->success(__('The contracttype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contracttype could not be saved. Please, try again.'));
        }
        $this->set(compact('contracttype'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contracttype id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contracttype = $this->Contracttypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contracttype = $this->Contracttypes->patchEntity($contracttype, $this->request->getData());
            $contracttype->user_modified = $this->Auth->user('id');
            
            if ($this->Contracttypes->save($contracttype)) {
                $this->Flash->success(__('The contracttype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contracttype could not be saved. Please, try again.'));
        }
        $this->set(compact('contracttype'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contracttype id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contracttype = $this->Contracttypes->get($id);
        if ($this->Contracttypes->delete($contracttype)) {
            $this->Flash->success(__('The contracttype has been deleted.'));
        } else {
            $this->Flash->error(__('The contracttype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
