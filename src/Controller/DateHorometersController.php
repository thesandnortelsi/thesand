<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\DateHorometersMachine;


/**
 * DateHorometers Controller
 *
 * @property \App\Model\Table\DateHorometersTable $DateHorometers
 *
 * @method \App\Model\Entity\DateHorometer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DateHorometersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $dateHorometers = $this->paginate($this->DateHorometers);

        $this->set(compact('dateHorometers'));
    }

    /**
     * View method
     *
     * @param string|null $id Date Horometer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dateHorometer = $this->DateHorometers->get($id, [
            'contain' => ['Machines']
        ]);

        $this->set('dateHorometer', $dateHorometer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dateHorometer = $this->DateHorometers->newEntity();
        
        $this->loadModel('DateHorometersMachines');

        $dateMachine = $this->DateHorometersMachines->newEntity();
        

        if ($this->request->is('post')) {
            
            // $article = new DateHorometersMachine([
            //             'date_horometer_id' => 17,
            //             'machine_id' => 1
            //         ]);

            // $this->article->save();

            
            $dateMachine->date_horometer_id = '17';
            $dateMachine->machine_id = '1';

            $this->DateHorometersMachines->save($dateMachine);


            $this->DateHorometers->save($dateHorometer);

            // $this->loadModel('DateHorometerMachine');
            // $this->DateHorometerMachines->create();
            // $this->DateHorometerMachines->date_horometer_id = 4;
            // $this->DateHorometerMachines->machine_id = 1;
            // $this->DateHorometerMachines->save();

            


            // $horometerMachine = $this->DateHorometers->DateHorometersMachines->newEntity();
            // $horometerMachine->date_horometer_id = 10;
            // // $horometerMachine->machine_id = 1;

            // $dateHorometer->date_horometers_machines = [$horometerMachine];

            // $this->DateHorometers->save($dateHorometer);

            // $id = 10;

            // $publicaddimg = $this->DateHorometers->DateHorometersMachines->query();

            // $data = [
            //     'date_horometer_id' => $id,
            //     'machine_id' => 1
            // ];

            // $publicaddimg->insert(['date_horometer_id','machine_id'])
            //         ->values($data);


            // $horometerTable = TableRegistry::get('DateHorometersMachine');

            // $horometerTable = TableRegistry::getTableLocator()->get('DateHorometersMachine');
            // $author = $horometer->DateHorometerMachines->findByUserName('mark')->first();

            // $horometer->

            // $horometer = $horometerTable->newEntity();
            // $horometer->date_horometer_id = 9;
            // $horometer->machine_id = 1;

            // $horometerTable->save($horometer);


            // if ($this->DateHorometers->save($dateHorometer)) {



            //     $this->Flash->success(__('The date horometer has been saved.'));

            //     return $this->redirect(['action' => 'add']);
            // }
            // $this->Flash->error(__('The date horometer could not be saved. Please, try again.'));

            // debug($this->request->getData());



        }
        $machines = $this->DateHorometers->Machines->find('list', ['limit' => 200]);
        
        $listMachine = $this->DateHorometers->Machines->find('all');

        $this->set(compact('dateHorometer', 'machines', 'listMachine'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Date Horometer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dateHorometer = $this->DateHorometers->get($id, [
            'contain' => ['Machines']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dateHorometer = $this->DateHorometers->patchEntity($dateHorometer, $this->request->getData());
            if ($this->DateHorometers->save($dateHorometer)) {
                $this->Flash->success(__('The date horometer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The date horometer could not be saved. Please, try again.'));
        }
        $machines = $this->DateHorometers->Machines->find('list', ['limit' => 200]);
        $this->set(compact('dateHorometer', 'machines'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Date Horometer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dateHorometer = $this->DateHorometers->get($id);
        if ($this->DateHorometers->delete($dateHorometer)) {
            $this->Flash->success(__('The date horometer has been deleted.'));
        } else {
            $this->Flash->error(__('The date horometer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
