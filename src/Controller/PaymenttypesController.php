<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Paymenttypes Controller
 *
 * @property \App\Model\Table\PaymenttypesTable $Paymenttypes
 *
 * @method \App\Model\Entity\Paymenttype[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaymenttypesController extends AppController
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
        $paymenttypes = $this->paginate($this->Paymenttypes);

        $this->set(compact('paymenttypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Paymenttype id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paymenttype = $this->Paymenttypes->get($id, [
            'contain' => ['Employeeworkinformations']
        ]);

        $this->set('paymenttype', $paymenttype);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paymenttype = $this->Paymenttypes->newEntity();
        if ($this->request->is('post')) {
            $paymenttype = $this->Paymenttypes->patchEntity($paymenttype, $this->request->getData());
            $paymenttype->user_created = $this->Auth->user('id');

            if ($this->Paymenttypes->save($paymenttype)) {
                $this->Flash->success(__('The paymenttype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paymenttype could not be saved. Please, try again.'));
        }
        $this->set(compact('paymenttype'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Paymenttype id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paymenttype = $this->Paymenttypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paymenttype = $this->Paymenttypes->patchEntity($paymenttype, $this->request->getData());
            $paymenttype->user_modified = $this->Auth->user('id');
            
            if ($this->Paymenttypes->save($paymenttype)) {
                $this->Flash->success(__('The paymenttype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paymenttype could not be saved. Please, try again.'));
        }
        $this->set(compact('paymenttype'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Paymenttype id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paymenttype = $this->Paymenttypes->get($id);
        if ($this->Paymenttypes->delete($paymenttype)) {
            $this->Flash->success(__('The paymenttype has been deleted.'));
        } else {
            $this->Flash->error(__('The paymenttype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
