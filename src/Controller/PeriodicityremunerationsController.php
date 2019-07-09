<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Periodicityremunerations Controller
 *
 * @property \App\Model\Table\PeriodicityremunerationsTable $Periodicityremunerations
 *
 * @method \App\Model\Entity\Periodicityremuneration[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PeriodicityremunerationsController extends AppController
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
        $periodicityremunerations = $this->paginate($this->Periodicityremunerations);

        $this->set(compact('periodicityremunerations'));
    }

    /**
     * View method
     *
     * @param string|null $id Periodicityremuneration id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $periodicityremuneration = $this->Periodicityremunerations->get($id, [
            'contain' => ['Employeeworkinformations']
        ]);

        $this->set('periodicityremuneration', $periodicityremuneration);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $periodicityremuneration = $this->Periodicityremunerations->newEntity();
        if ($this->request->is('post')) {
            $periodicityremuneration = $this->Periodicityremunerations->patchEntity($periodicityremuneration, $this->request->getData());
            $periodicityremuneration->user_created = $this->Auth->user('id');

            if ($this->Periodicityremunerations->save($periodicityremuneration)) {
                $this->Flash->success(__('The periodicityremuneration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The periodicityremuneration could not be saved. Please, try again.'));
        }
        $this->set(compact('periodicityremuneration'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Periodicityremuneration id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $periodicityremuneration = $this->Periodicityremunerations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $periodicityremuneration = $this->Periodicityremunerations->patchEntity($periodicityremuneration, $this->request->getData());
            $periodicityremuneration->user_modified = $this->Auth->user('id');

            if ($this->Periodicityremunerations->save($periodicityremuneration)) {
                $this->Flash->success(__('The periodicityremuneration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The periodicityremuneration could not be saved. Please, try again.'));
        }
        $this->set(compact('periodicityremuneration'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Periodicityremuneration id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $periodicityremuneration = $this->Periodicityremunerations->get($id);
        if ($this->Periodicityremunerations->delete($periodicityremuneration)) {
            $this->Flash->success(__('The periodicityremuneration has been deleted.'));
        } else {
            $this->Flash->error(__('The periodicityremuneration could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
