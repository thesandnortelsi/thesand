<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Zonetypes Controller
 *
 * @property \App\Model\Table\ZonetypesTable $Zonetypes
 *
 * @method \App\Model\Entity\Zonetype[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ZonetypesController extends AppController
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
        $zonetypes = $this->paginate($this->Zonetypes);

        $this->set(compact('zonetypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Zonetype id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $zonetype = $this->Zonetypes->get($id, [
            'contain' => ['Employeepersonalinformations']
        ]);

        $this->set('zonetype', $zonetype);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $zonetype = $this->Zonetypes->newEntity();
        if ($this->request->is('post')) {
            $zonetype = $this->Zonetypes->patchEntity($zonetype, $this->request->getData());
            $zonetype->user_created = $this->Auth->user('id');

            if ($this->Zonetypes->save($zonetype)) {
                $this->Flash->success(__('The zonetype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zonetype could not be saved. Please, try again.'));
        }
        $this->set(compact('zonetype'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Zonetype id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $zonetype = $this->Zonetypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $zonetype = $this->Zonetypes->patchEntity($zonetype, $this->request->getData());
            $zonetype->user_modified = $this->Auth->user('id');
            
            if ($this->Zonetypes->save($zonetype)) {
                $this->Flash->success(__('The zonetype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The zonetype could not be saved. Please, try again.'));
        }
        $this->set(compact('zonetype'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Zonetype id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $zonetype = $this->Zonetypes->get($id);
        if ($this->Zonetypes->delete($zonetype)) {
            $this->Flash->success(__('The zonetype has been deleted.'));
        } else {
            $this->Flash->error(__('The zonetype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
