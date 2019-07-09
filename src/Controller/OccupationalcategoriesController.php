<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Occupationalcategories Controller
 *
 * @property \App\Model\Table\OccupationalcategoriesTable $Occupationalcategories
 *
 * @method \App\Model\Entity\Occupationalcategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OccupationalcategoriesController extends AppController
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
        $occupationalcategories = $this->paginate($this->Occupationalcategories);

        $this->set(compact('occupationalcategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Occupationalcategory id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $occupationalcategory = $this->Occupationalcategories->get($id, [
            'contain' => ['Employeeworkinformations']
        ]);

        $this->set('occupationalcategory', $occupationalcategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $occupationalcategory = $this->Occupationalcategories->newEntity();
        if ($this->request->is('post')) {
            $occupationalcategory = $this->Occupationalcategories->patchEntity($occupationalcategory, $this->request->getData());
            $occupationalcategory->user_created = $this->Auth->user('id');

            if ($this->Occupationalcategories->save($occupationalcategory)) {
                $this->Flash->success(__('The occupationalcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The occupationalcategory could not be saved. Please, try again.'));
        }
        $this->set(compact('occupationalcategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Occupationalcategory id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $occupationalcategory = $this->Occupationalcategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $occupationalcategory = $this->Occupationalcategories->patchEntity($occupationalcategory, $this->request->getData());
            $occupationalcategory->user_modified = $this->Auth->user('id');
            
            if ($this->Occupationalcategories->save($occupationalcategory)) {
                $this->Flash->success(__('The occupationalcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The occupationalcategory could not be saved. Please, try again.'));
        }
        $this->set(compact('occupationalcategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Occupationalcategory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $occupationalcategory = $this->Occupationalcategories->get($id);
        if ($this->Occupationalcategories->delete($occupationalcategory)) {
            $this->Flash->success(__('The occupationalcategory has been deleted.'));
        } else {
            $this->Flash->error(__('The occupationalcategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
