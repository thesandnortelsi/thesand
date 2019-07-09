<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Doublepayagreements Controller
 *
 * @property \App\Model\Table\DoublepayagreementsTable $Doublepayagreements
 *
 * @method \App\Model\Entity\Doublepayagreement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DoublepayagreementsController extends AppController
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
        $doublepayagreements = $this->paginate($this->Doublepayagreements);

        $this->set(compact('doublepayagreements'));
    }

    /**
     * View method
     *
     * @param string|null $id Doublepayagreement id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $doublepayagreement = $this->Doublepayagreements->get($id, [
            'contain' => ['Employeeworkinformations']
        ]);

        $this->set('doublepayagreement', $doublepayagreement);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $doublepayagreement = $this->Doublepayagreements->newEntity();
        if ($this->request->is('post')) {
            $doublepayagreement = $this->Doublepayagreements->patchEntity($doublepayagreement, $this->request->getData());
            $doublepayagreement->user_created = $this->Auth->user('id');

            if ($this->Doublepayagreements->save($doublepayagreement)) {
                $this->Flash->success(__('The doublepayagreement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The doublepayagreement could not be saved. Please, try again.'));
        }
        $this->set(compact('doublepayagreement'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Doublepayagreement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $doublepayagreement = $this->Doublepayagreements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $doublepayagreement = $this->Doublepayagreements->patchEntity($doublepayagreement, $this->request->getData());
            $doublepayagreement->user_modified = $this->Auth->user('id');
            
            if ($this->Doublepayagreements->save($doublepayagreement)) {
                $this->Flash->success(__('The doublepayagreement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The doublepayagreement could not be saved. Please, try again.'));
        }
        $this->set(compact('doublepayagreement'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Doublepayagreement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $doublepayagreement = $this->Doublepayagreements->get($id);
        if ($this->Doublepayagreements->delete($doublepayagreement)) {
            $this->Flash->success(__('The doublepayagreement has been deleted.'));
        } else {
            $this->Flash->error(__('The doublepayagreement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
