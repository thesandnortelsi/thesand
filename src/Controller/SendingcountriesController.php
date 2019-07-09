<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sendingcountries Controller
 *
 * @property \App\Model\Table\SendingcountriesTable $Sendingcountries
 *
 * @method \App\Model\Entity\Sendingcountry[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SendingcountriesController extends AppController
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
        $sendingcountries = $this->paginate($this->Sendingcountries);

        $this->set(compact('sendingcountries'));
    }

    /**
     * View method
     *
     * @param string|null $id Sendingcountry id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sendingcountry = $this->Sendingcountries->get($id, [
            'contain' => ['Employeepersonalinformations']
        ]);

        $this->set('sendingcountry', $sendingcountry);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sendingcountry = $this->Sendingcountries->newEntity();
        if ($this->request->is('post')) {
            $sendingcountry = $this->Sendingcountries->patchEntity($sendingcountry, $this->request->getData());
            $sendingcountry->user_created = $this->Auth->user('id');

            if ($this->Sendingcountries->save($sendingcountry)) {
                $this->Flash->success(__('The sendingcountry has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sendingcountry could not be saved. Please, try again.'));
        }
        $this->set(compact('sendingcountry'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sendingcountry id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sendingcountry = $this->Sendingcountries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sendingcountry = $this->Sendingcountries->patchEntity($sendingcountry, $this->request->getData());
            $sendingcountry->user_modified = $this->Auth->user('id');

            if ($this->Sendingcountries->save($sendingcountry)) {
                $this->Flash->success(__('The sendingcountry has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sendingcountry could not be saved. Please, try again.'));
        }
        $this->set(compact('sendingcountry'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sendingcountry id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sendingcountry = $this->Sendingcountries->get($id);
        if ($this->Sendingcountries->delete($sendingcountry)) {
            $this->Flash->success(__('The sendingcountry has been deleted.'));
        } else {
            $this->Flash->error(__('The sendingcountry could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
