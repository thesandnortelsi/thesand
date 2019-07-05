<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Functionalities Controller
 *
 *
 * @method \App\Model\Entity\Functionality[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FunctionalitiesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('dashboard');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $functionalities = $this->paginate($this->Functionalities);

        $this->set(compact('functionalities'));
    }

    /**
     * View method
     *
     * @param string|null $id Functionality id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $functionality = $this->Functionalities->get($id, [
            'contain' => []
        ]);

        $this->set('functionality', $functionality);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $functionality = $this->Functionalities->newEntity();
        if ($this->request->is('post')) {
            $functionality = $this->Functionalities->patchEntity($functionality, $this->request->getData());
            if ($this->Functionalities->save($functionality)) {
                $this->Flash->success(__('The functionality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The functionality could not be saved. Please, try again.'));
        }
        $this->set(compact('functionality'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Functionality id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $functionality = $this->Functionalities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $functionality = $this->Functionalities->patchEntity($functionality, $this->request->getData());
            if ($this->Functionalities->save($functionality)) {
                $this->Flash->success(__('The functionality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The functionality could not be saved. Please, try again.'));
        }
        $this->set(compact('functionality'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Functionality id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $functionality = $this->Functionalities->get($id);
        if ($this->Functionalities->delete($functionality)) {
            $this->Flash->success(__('The functionality has been deleted.'));
        } else {
            $this->Flash->error(__('The functionality could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
