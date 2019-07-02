<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Programmings Controller
 *
 *
 * @method \App\Model\Entity\Programming[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProgrammingsController extends AppController
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
        $programmings = $this->paginate($this->Programmings);

        $this->set(compact('programmings'));
    }

    /**
     * View method
     *
     * @param string|null $id Programming id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $programming = $this->Programmings->get($id, [
            'contain' => []
        ]);

        $this->set('programming', $programming);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $programming = $this->Programmings->newEntity();
        if ($this->request->is('post')) {
            $programming = $this->Programmings->patchEntity($programming, $this->request->getData());
            if ($this->Programmings->save($programming)) {
                $this->Flash->success(__('The programming has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The programming could not be saved. Please, try again.'));
        }
        $this->set(compact('programming'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Programming id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $programming = $this->Programmings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $programming = $this->Programmings->patchEntity($programming, $this->request->getData());
            if ($this->Programmings->save($programming)) {
                $this->Flash->success(__('The programming has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The programming could not be saved. Please, try again.'));
        }
        $this->set(compact('programming'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Programming id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $programming = $this->Programmings->get($id);
        if ($this->Programmings->delete($programming)) {
            $this->Flash->success(__('The programming has been deleted.'));
        } else {
            $this->Flash->error(__('The programming could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
