<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Specialsituations Controller
 *
 * @property \App\Model\Table\SpecialsituationsTable $Specialsituations
 *
 * @method \App\Model\Entity\Specialsituation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SpecialsituationsController extends AppController
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
        $specialsituations = $this->paginate($this->Specialsituations);

        $this->set(compact('specialsituations'));
    }

    /**
     * View method
     *
     * @param string|null $id Specialsituation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $specialsituation = $this->Specialsituations->get($id, [
            'contain' => ['Employeeworkinformations']
        ]);

        $this->set('specialsituation', $specialsituation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $specialsituation = $this->Specialsituations->newEntity();
        if ($this->request->is('post')) {
            $specialsituation = $this->Specialsituations->patchEntity($specialsituation, $this->request->getData());
            $specialsituation->user_created = $this->Auth->user('id');

            if ($this->Specialsituations->save($specialsituation)) {
                $this->Flash->success(__('The specialsituation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The specialsituation could not be saved. Please, try again.'));
        }
        $this->set(compact('specialsituation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Specialsituation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $specialsituation = $this->Specialsituations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $specialsituation = $this->Specialsituations->patchEntity($specialsituation, $this->request->getData());
            $specialsituation->user_modified = $this->Auth->user('id');
            
            if ($this->Specialsituations->save($specialsituation)) {
                $this->Flash->success(__('The specialsituation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The specialsituation could not be saved. Please, try again.'));
        }
        $this->set(compact('specialsituation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Specialsituation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $specialsituation = $this->Specialsituations->get($id);
        if ($this->Specialsituations->delete($specialsituation)) {
            $this->Flash->success(__('The specialsituation has been deleted.'));
        } else {
            $this->Flash->error(__('The specialsituation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
