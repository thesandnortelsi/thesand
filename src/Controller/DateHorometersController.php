<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\DateHorometersMachine;
use Cake\Datasource\ConnectionManager;

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
        
        // $this->loadModel('DateHorometersMachines');
        // $dateHoroMachine = $this->DateHorometersMachines->newEntity();
        

        if ($this->request->is('post')) {

// $connection = ConnectionManager::get('default');

            $dateHorometer = $this->DateHorometers->patchEntity($dateHorometer, $this->request->getData());
// // $dateHoroMachine = $this->DateHorometersMachines->patchEntity($dateHoroMachine, $this->request->getData());

// $horometers = $this->request->data();

            $dateHorometer->user_created = $this->Auth->user('user_id');

            $existe = $this->DateHorometers->find('all', [
                'conditions' => ['date' => date('Y-m-d')]
            ]);
            $existe = $existe->first();

            if (empty($existe)) 
            {
                $this->DateHorometers->save($dateHorometer);
                $date_id = $dateHorometer->date_horometer_id;           

                $this->Flash->success(__('Gerado Correctamente.'));

                return $this->redirect(['action' => 'edit', $date_id]);
            }
            else
            {
                return $this->redirect(['action' => 'edit', $existe->date_horometer_id]);
            }

            


            // for ($i=0; $i < count($horometers['date_horometers_machines']['day']); $i++) 
            // {
            //     if (!empty($horometers['date_horometers_machines']['day'][$i]) )
            //     {
            //         $dia = $horometers['date_horometers_machines']['day'][$i];
            //     }
            //     else
            //     {
            //         $dia = '0.00';
            //     }

            //     if (!empty($horometers['date_horometers_machines']['night'][$i]) )
            //     {
            //         $noche = $horometers['date_horometers_machines']['night'][$i];
            //     }
            //     else
            //     {
            //         $noche = '0.00';
            //     }

            //     $connection->insert('date_horometers_machines', [
            //         'date_horometer_id' => $date_id,
            //         'machine_id' => $horometers['date_horometers_machines']['machine_id'][$i],
            //         'day' => $dia,
            //         'night' => $noche
            //     ]);
                
            // }

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
        if ($this->request->is(['patch', 'post', 'put'])) 
        {
            // $dateHorometer = $this->DateHorometers->patchEntity($dateHorometer, $this->request->getData());
            // if ($this->DateHorometers->save($dateHorometer)) 
            // {
                $connection = ConnectionManager::get('default');
                $horometers = $this->request->data();     


                for ($i=0; $i < count($horometers['date_horometers_machines']['day']); $i++) 
                {
                    if (!empty($horometers['date_horometers_machines']['day'][$i]) )
                    {
                        $dia = $horometers['date_horometers_machines']['day'][$i];
                    }
                    else
                    {
                        $dia = '0.00';
                    }

                    if (!empty($horometers['date_horometers_machines']['night'][$i]) )
                    {
                        $noche = $horometers['date_horometers_machines']['night'][$i];
                    }
                    else
                    {
                        $noche = '0.00';
                    }

                    $connection->insert('date_horometers_machines', [
                        'date_horometer_id' => $id,
                        'machine_id' => $horometers['date_horometers_machines']['machine_id'][$i],
                        'day' => $dia,
                        'night' => $noche
                    ]);
                    
                }
                // $this->Flash->success(__('The date horometer has been saved.'));

                // return $this->redirect(['action' => 'index']);
            // }
            // $this->Flash->error(__('The date horometer could not be saved. Please, try again.'));
        }
        $machines = $this->DateHorometers->Machines->find('list', ['limit' => 200]);

        $listMachine = $this->DateHorometers->Machines->find('all');

        $this->set(compact('dateHorometer', 'machines', 'listMachine'));
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
