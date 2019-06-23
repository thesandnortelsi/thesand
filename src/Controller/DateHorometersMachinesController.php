<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DateHorometersMachines Controller
 *
 *
 * @method \App\Model\Entity\DateHorometersMachine[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DateHorometersMachinesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $dateHorometersMachines = $this->paginate($this->DateHorometersMachines);

        $this->set(compact('dateHorometersMachines'));
    }

    /**
     * View method
     *
     * @param string|null $id Date Horometers Machine id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dateHorometersMachine = $this->DateHorometersMachines->get($id, [
            'contain' => []
        ]);

        $this->set('dateHorometersMachine', $dateHorometersMachine);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dateHorometersMachine = $this->DateHorometersMachines->newEntity();
        if ($this->request->is('post')) {
            $dateHorometersMachine = $this->DateHorometersMachines->patchEntity($dateHorometersMachine, $this->request->getData());
            if ($this->DateHorometersMachines->save($dateHorometersMachine)) {
                $this->Flash->success(__('The date horometers machine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The date horometers machine could not be saved. Please, try again.'));
        }
        $this->set(compact('dateHorometersMachine'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Date Horometers Machine id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dateHorometersMachine = $this->DateHorometersMachines->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dateHorometersMachine = $this->DateHorometersMachines->patchEntity($dateHorometersMachine, $this->request->getData());
            if ($this->DateHorometersMachines->save($dateHorometersMachine)) {
                $this->Flash->success(__('The date horometers machine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The date horometers machine could not be saved. Please, try again.'));
        }
        $this->set(compact('dateHorometersMachine'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Date Horometers Machine id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dateHorometersMachine = $this->DateHorometersMachines->get($id);
        if ($this->DateHorometersMachines->delete($dateHorometersMachine)) {
            $this->Flash->success(__('The date horometers machine has been deleted.'));
        } else {
            $this->Flash->error(__('The date horometers machine could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
