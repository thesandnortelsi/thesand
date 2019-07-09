<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Laborregimes Controller
 *
 * @property \App\Model\Table\LaborregimesTable $Laborregimes
 *
 * @method \App\Model\Entity\Laborregime[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LaborregimesController extends AppController
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
        $laborregimes = $this->paginate($this->Laborregimes);

        $this->set(compact('laborregimes'));
    }

    /**
     * View method
     *
     * @param string|null $id Laborregime id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $laborregime = $this->Laborregimes->get($id, [
            'contain' => ['Employeeworkinformations']
        ]);

        $this->set('laborregime', $laborregime);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $laborregime = $this->Laborregimes->newEntity();
        if ($this->request->is('post')) {
            $laborregime = $this->Laborregimes->patchEntity($laborregime, $this->request->getData());
            $laborregime->user_created = $this->Auth->user('id');

            if ($this->Laborregimes->save($laborregime)) {
                $this->Flash->success(__('The laborregime has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The laborregime could not be saved. Please, try again.'));
        }
        $this->set(compact('laborregime'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Laborregime id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $laborregime = $this->Laborregimes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $laborregime = $this->Laborregimes->patchEntity($laborregime, $this->request->getData());
            $laborregime->user_modified = $this->Auth->user('id');
            
            if ($this->Laborregimes->save($laborregime)) {
                $this->Flash->success(__('The laborregime has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The laborregime could not be saved. Please, try again.'));
        }
        $this->set(compact('laborregime'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Laborregime id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $laborregime = $this->Laborregimes->get($id);
        if ($this->Laborregimes->delete($laborregime)) {
            $this->Flash->success(__('The laborregime has been deleted.'));
        } else {
            $this->Flash->error(__('The laborregime could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
