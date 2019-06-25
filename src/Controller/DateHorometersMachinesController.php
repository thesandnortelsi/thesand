<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DatehorometersMachines Controller
 *
 * @property \App\Model\Table\DatehorometersMachinesTable $DatehorometersMachines
 *
 * @method \App\Model\Entity\DatehorometersMachine[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DatehorometersMachinesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Datehorometers', 'Machines']
        ];
        $datehorometersMachines = $this->paginate($this->DatehorometersMachines);

        $this->set(compact('datehorometersMachines'));
    }

    /**
     * View method
     *
     * @param string|null $id Datehorometers Machine id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $datehorometersMachine = $this->DatehorometersMachines->get($id, [
            'contain' => ['Datehorometers', 'Machines']
        ]);

        $this->set('datehorometersMachine', $datehorometersMachine);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $datehorometersMachine = $this->DatehorometersMachines->newEntity();
        if ($this->request->is('post')) {
            $datehorometersMachine = $this->DatehorometersMachines->patchEntity($datehorometersMachine, $this->request->getData());
            if ($this->DatehorometersMachines->save($datehorometersMachine)) {
                $this->Flash->success(__('The datehorometers machine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The datehorometers machine could not be saved. Please, try again.'));
        }
        $datehorometers = $this->DatehorometersMachines->Datehorometers->find('list', ['limit' => 200]);
        $machines = $this->DatehorometersMachines->Machines->find('list', ['limit' => 200]);
        $this->set(compact('datehorometersMachine', 'datehorometers', 'machines'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Datehorometers Machine id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $datehorometersMachine = $this->DatehorometersMachines->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datehorometersMachine = $this->DatehorometersMachines->patchEntity($datehorometersMachine, $this->request->getData());
            if ($this->DatehorometersMachines->save($datehorometersMachine)) {
                $this->Flash->success(__('The datehorometers machine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The datehorometers machine could not be saved. Please, try again.'));
        }
        $datehorometers = $this->DatehorometersMachines->Datehorometers->find('list', ['limit' => 200]);
        $machines = $this->DatehorometersMachines->Machines->find('list', ['limit' => 200]);
        $this->set(compact('datehorometersMachine', 'datehorometers', 'machines'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Datehorometers Machine id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $datehorometersMachine = $this->DatehorometersMachines->get($id);
        if ($this->DatehorometersMachines->delete($datehorometersMachine)) {
            $this->Flash->success(__('The datehorometers machine has been deleted.'));
        } else {
            $this->Flash->error(__('The datehorometers machine could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
