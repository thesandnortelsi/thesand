<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Streettypes Controller
 *
 * @property \App\Model\Table\StreettypesTable $Streettypes
 *
 * @method \App\Model\Entity\Streettype[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StreettypesController extends AppController
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
        $streettypes = $this->paginate($this->Streettypes);

        $this->set(compact('streettypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Streettype id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $streettype = $this->Streettypes->get($id, [
            'contain' => ['Employeepersonalinformations']
        ]);

        $this->set('streettype', $streettype);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $streettype = $this->Streettypes->newEntity();
        if ($this->request->is('post')) {
            $streettype = $this->Streettypes->patchEntity($streettype, $this->request->getData());
            $streettype->user_created = $this->Auth->user('id');
            

            if ($this->Streettypes->save($streettype)) {
                $this->Flash->success(__('The streettype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The streettype could not be saved. Please, try again.'));
        }
        $this->set(compact('streettype'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Streettype id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $streettype = $this->Streettypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $streettype = $this->Streettypes->patchEntity($streettype, $this->request->getData());
            $streettype->user_modified = $this->Auth->user('id');

            if ($this->Streettypes->save($streettype)) {
                $this->Flash->success(__('The streettype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The streettype could not be saved. Please, try again.'));
        }
        $this->set(compact('streettype'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Streettype id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $streettype = $this->Streettypes->get($id);
        if ($this->Streettypes->delete($streettype)) {
            $this->Flash->success(__('The streettype has been deleted.'));
        } else {
            $this->Flash->error(__('The streettype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
