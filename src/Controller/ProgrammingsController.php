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

        if ($this->request->is('post')) 
        {
            $programming = $this->Programmings->patchEntity($programming, $this->request->getData());

            $year = $this->request->getData(['year']);
            $year = date("Y-m-d", strtotime($year.'-12-31'."+ 1 days"));
            $today = date('2019-06-07');

            $machines = $this->Programmings->Machines->find('all', ['limit' => 200, 'conditions' => ['state' => 'ACTIVO']]);

            $matto = 0;
            foreach ($machines as $machine) 
            {
                $frecuencia = $this->getFrequencyById($machine->frequency_id);
                $horometro = $this->getLastHorometer($machine->id);
                $row = $horometro->first();

                if (!empty($row->night))
                {
                    $ultimo_horometro = $row->night;
                }
                else{
                    $ultimo_horometro = $row->day;
                }

                $posicion = $machine->position;

                $dias = (($machine->horometer_mantenaice + $frecuencia->value) - $ultimo_horometro) / $machine->factor;
                $fecha = date("Y-m-d", strtotime($today."+ ".floor($dias)." days"));
                $siguiente = $machine->horometer_mantenaice + $frecuencia->value;

                while($fecha < $year)
                {
                    $posicion ++;
                    $posicion = ($posicion == 9) ? 1 : $posicion;

                    $items[] = array(
                                    'machine_id' => $machine->id,
                                    'date' => $fecha,
                                    'year' => date("Y", strtotime($fecha)),
                                    'month' => date("m", strtotime($fecha)),
                                    'day' => date("d", strtotime($fecha)),
                                    'position' => $posicion,
                                    'horometer_estimated' => $siguiente,
                                    'user_created' => $this->Auth->user('id')
                                );                    

                    $siguiente = $siguiente + $frecuencia->value;
                    $dias = (($siguiente) - $ultimo_horometro) / $machine->factor;
                    $fecha = date("Y-m-d", strtotime($today."+ ".floor($dias)." days"));                        
                    
                }                                                
            }
            
            $entities = $this->Programmings->newEntities($items);
            
            if ($this->Programmings->saveMany($entities)) 
            {
                $this->Flash->success(__('The programming has been saved.'));
            }
            else
            {
                $this->Flash->error(__('The programming could not be saved. Please, try again.'));
            }
                    
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

    private function getFrequencyById($id)
    {
        $this->loadModel('Frequencys');

        $frequency = $this->Frequencys->get($id);

        return $frequency;
    }

    private function getLastHorometer($id)
    {
        $this->loadModel('DatehorometersMachines');

        $horometer = $this->DatehorometersMachines->find('all', [
                'conditions' => ['machine_id' => $id],
                'order' => ['date' => 'desc']
            ])->innerJoinWith('Datehorometers');

        return $horometer;
    }

    private function updHourMantenaice($maquina, $horas, $dias)
    {
        $this->loadModel('Machines');

        $actualizar = $this->Machines->get($maquina);

        $actualizar->hour_left =  $horas;
        $actualizar->day_left = $dias;

        $this->Machines->save($actualizar);
    }

    public function editProgramming($fecha)
    {
        $programming = $this->Programmings->newEntity();

        $anio = date("Y", strtotime($fecha));
        $anio = date("Y-m-d", strtotime($anio.'-12-31'."+ 1 days"));
        $hoy = $fecha;

        $machines = $this->Programmings->Machines->find('all', ['limit' => 200, 'conditions' => ['state' => 'ACTIVO']]);
        
        foreach ($machines as $machine) 
        {
            $this->Programmings->deleteAll([
                    'date >' => $machine->date_mantenaice,
                    'machine_id' => $machine->id
                ]);

            $frecuencia = $this->getFrequencyById($machine->frequency_id);
            $horometro = $this->getLastHorometer($machine->id);
            $first = $horometro->first();

            $ultimo_horometro = !empty($first->night) ? $first->night : $first->day;

            $posicion = $machine->position;

            $dias = (($machine->horometer_mantenaice + $frecuencia->value) - $ultimo_horometro) / $machine->factor;
            $fecha = date("Y-m-d", strtotime($hoy."+ ".floor($dias)." days"));
            $siguiente = $machine->horometer_mantenaice + $frecuencia->value;
            
            $horas = $siguiente - $ultimo_horometro;
            $dias = $horas / $machine->factor;
            $this->updHourMantenaice($machine->id, $horas, $dias);

            while($fecha < $anio)
            {
                $posicion ++;
                $posicion = ($posicion == 9) ? 1 : $posicion;

                $programacion[] = array(
                                'machine_id' => $machine->id,
                                'date' => $fecha,
                                'year' => date("Y", strtotime($fecha)),
                                'month' => date("m", strtotime($fecha)),
                                'day' => date("d", strtotime($fecha)),
                                'position' => $posicion,
                                'horometer_estimated' => $siguiente,
                                'user_created' => $this->Auth->user('id')
                            );

                $siguiente = $siguiente + $frecuencia->value;
                $dias = (($siguiente) - $ultimo_horometro) / $machine->factor;
                $fecha = date("Y-m-d", strtotime($hoy."+ ".floor($dias)." days"));
            }                                                            
        }

        $fila = $this->Programmings->newEntities($programacion);        
        $this->Programmings->saveMany($fila);        
    }
}
