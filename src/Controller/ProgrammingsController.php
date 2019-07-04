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

            $machines = $this->Programmings->Machines->find('all', ['limit' => 200, 'conditions' => ['state' => 'ACTIVO', 'id' => 2 ]]);

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

                $matto = (($machine->horometer_mantenaice + $frecuencia->value) - $ultimo_horometro) / $machine->factor;

                
                $fecha = date("Y-m-d", strtotime($machine->date_mantenaice."+ ".ceil($matto)." days"));
                $domingos = $this->countSundays($machine->date_mantenaice, $fecha);
                $fecha = date("Y-m-d", strtotime($fecha."+ ".$domingos." days"));


                // for ($i=0; $i < ; $i++)
                // {
                //     if (condition) 
                //     {
                        
                //     }
                // }
                
                $programming->date = $fecha;
                $programming->machine_id = $machine->id;
                // $programming->year = date('');
                // $programming->month = date();
                // $programming->day = date();
                // $programming->position = date();
                // $programming->horometer_estimated = date();
                // $programming->user_created = $this->Auth->user('user_id');
                
            }
            

            // debug($fecha);

            $this->Programmings->save($programming);

            
            // return $this->redirect(['action' => 'add']);


            // if ($this->Programmings->save($programming)) {
            //     $this->Flash->success(__('The programming has been saved.'));

            //     return $this->redirect(['action' => 'index']);
            // }
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
                'conditions' => ['date' => '2019-06-07', 'machine_id' => $id]
            ])->innerJoinWith('Datehorometers');

        return $horometer;
    }

    private function countSundays($fechaInicio,$fechaFin)
    {
     // $dias=array();
     $dias = 0;
     $fecha1=date($fechaInicio);
     $fecha2=date($fechaFin);
     $fechaTime=strtotime("-1 day",strtotime($fecha1));
     $fecha=date("Y-m-d",$fechaTime);
     while($fecha <= $fecha2)
     {
      $proximo_domingo=strtotime("next Sunday",$fechaTime);
      $fechaDomingo=date("Y-m-d",$proximo_domingo);
      if($fechaDomingo <= $fechaFin)
      { 
       // $dias[$fechaDomingo]=$fechaDomingo;
       $dias++;
      }
      else
      {
       break;
      }
      $fechaTime=$proximo_domingo;
      $fecha=date("Y-m-d",$proximo_domingo);
     }
     return $dias;
    }
}
