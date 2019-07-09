<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Educationalsituations Controller
 *
 * @property \App\Model\Table\EducationalsituationsTable $Educationalsituations
 *
 * @method \App\Model\Entity\Educationalsituation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EducationalsituationsController extends AppController
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
        $educationalsituations = $this->paginate($this->Educationalsituations);

        $this->set(compact('educationalsituations'));
    }

    /**
     * View method
     *
     * @param string|null $id Educationalsituation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $educationalsituation = $this->Educationalsituations->get($id, [
            'contain' => ['Employeeworkinformations']
        ]);

        $this->set('educationalsituation', $educationalsituation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $educationalsituation = $this->Educationalsituations->newEntity();
        if ($this->request->is('post')) {
            $educationalsituation = $this->Educationalsituations->patchEntity($educationalsituation, $this->request->getData());
            $educationalsituation->user_created = $this->Auth->user('id');

            if ($this->Educationalsituations->save($educationalsituation)) {
                $this->Flash->success(__('The educationalsituation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The educationalsituation could not be saved. Please, try again.'));
        }
        $this->set(compact('educationalsituation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Educationalsituation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $educationalsituation = $this->Educationalsituations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $educationalsituation = $this->Educationalsituations->patchEntity($educationalsituation, $this->request->getData());
            $educationalsituation->user_modified = $this->Auth->user('id');
            
            if ($this->Educationalsituations->save($educationalsituation)) {
                $this->Flash->success(__('The educationalsituation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The educationalsituation could not be saved. Please, try again.'));
        }
        $this->set(compact('educationalsituation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Educationalsituation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $educationalsituation = $this->Educationalsituations->get($id);
        if ($this->Educationalsituations->delete($educationalsituation)) {
            $this->Flash->success(__('The educationalsituation has been deleted.'));
        } else {
            $this->Flash->error(__('The educationalsituation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
