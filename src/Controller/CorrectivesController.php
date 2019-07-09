<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Correctives Controller
 *
 * @property \App\Model\Table\CorrectivesTable $Correctives
 *
 * @method \App\Model\Entity\Corrective[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CorrectivesController extends AppController
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
        $this->paginate = [
            'contain' => ['Events']
        ];
        $correctives = $this->paginate($this->Correctives);

        $this->set(compact('correctives'));
    }

    /**
     * View method
     *
     * @param string|null $id Corrective id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $corrective = $this->Correctives->get($id, [
            'contain' => ['Events']
        ]);

        $this->set('corrective', $corrective);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $corrective = $this->Correctives->newEntity();
        if ($this->request->is('post')) {
            $corrective = $this->Correctives->patchEntity($corrective, $this->request->getData());
            if ($this->Correctives->save($corrective)) {
                $this->Flash->success(__('The corrective has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The corrective could not be saved. Please, try again.'));
        }
        $events = $this->Correctives->Events->find('list', ['limit' => 200]);
        $this->set(compact('corrective', 'events'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Corrective id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $corrective = $this->Correctives->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $corrective = $this->Correctives->patchEntity($corrective, $this->request->getData());
            if ($this->Correctives->save($corrective)) {
                $this->Flash->success(__('The corrective has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The corrective could not be saved. Please, try again.'));
        }
        $events = $this->Correctives->Events->find('list', ['limit' => 200]);
        $this->set(compact('corrective', 'events'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Corrective id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $corrective = $this->Correctives->get($id);
        if ($this->Correctives->delete($corrective)) {
            $this->Flash->success(__('The corrective has been deleted.'));
        } else {
            $this->Flash->error(__('The corrective could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
