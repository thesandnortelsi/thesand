<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Employeetypes Controller
 *
 * @property \App\Model\Table\EmployeetypesTable $Employeetypes
 *
 * @method \App\Model\Entity\Employeetype[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeetypesController extends AppController
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
        $employeetypes = $this->paginate($this->Employeetypes);

        $this->set(compact('employeetypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Employeetype id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employeetype = $this->Employeetypes->get($id, [
            'contain' => ['Employeeworkinformations']
        ]);

        $this->set('employeetype', $employeetype);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employeetype = $this->Employeetypes->newEntity();
        if ($this->request->is('post')) {
            $employeetype = $this->Employeetypes->patchEntity($employeetype, $this->request->getData());
            $employeetype->user_created = $this->Auth->user('id');

            if ($this->Employeetypes->save($employeetype)) {
                $this->Flash->success(__('The employeetype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employeetype could not be saved. Please, try again.'));
        }
        $this->set(compact('employeetype'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employeetype id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employeetype = $this->Employeetypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employeetype = $this->Employeetypes->patchEntity($employeetype, $this->request->getData());
            $employeetype->user_modified = $this->Auth->user('id');
            
            if ($this->Employeetypes->save($employeetype)) {
                $this->Flash->success(__('The employeetype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employeetype could not be saved. Please, try again.'));
        }
        $this->set(compact('employeetype'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employeetype id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employeetype = $this->Employeetypes->get($id);
        if ($this->Employeetypes->delete($employeetype)) {
            $this->Flash->success(__('The employeetype has been deleted.'));
        } else {
            $this->Flash->error(__('The employeetype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
