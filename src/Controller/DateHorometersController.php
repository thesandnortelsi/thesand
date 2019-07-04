<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Datehorometers Controller
 *
 * @property \App\Model\Table\DatehorometersTable $Datehorometers
 *
 * @method \App\Model\Entity\Datehorometer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DatehorometersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('maintenance');

        $datehorometers = $this->paginate($this->Datehorometers);

        $this->set(compact('datehorometers'));
    }

    /**
     * View method
     *
     * @param string|null $id Datehorometer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $datehorometer = $this->Datehorometers->get($id, [
            'contain' => ['Machines']
        ]);

        $this->set('datehorometer', $datehorometer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('maintenance');

        $datehorometer = $this->Datehorometers->newEntity();
        if ($this->request->is('post')) {
            $datehorometer = $this->Datehorometers->patchEntity($datehorometer, $this->request->getData());

            $dateInput = $this->request->getData(['date']);

            $datehorometer->user_created = $this->Auth->user('user_id');

            $existe = $this->Datehorometers->find('all', [
                'conditions' => ['date' => $dateInput]
            ]);
            $existe = $existe->first();

            if (empty($existe)) 
            {
                $this->Datehorometers->save($datehorometer);          

                $this->Flash->success(__('Generado Correctamente.'));

                return $this->redirect(['action' => 'edit', $datehorometer->id]);
            }
            else
            {
                return $this->redirect(['action' => 'edit', $existe->id]);
            }

            // if ($this->Datehorometers->save($datehorometer)) {
            //     $this->Flash->success(__('The datehorometer has been saved.'));

            //     return $this->redirect(['action' => 'index']);
            // }
            // $this->Flash->error(__('The datehorometer could not be saved. Please, try again.'));
        }
        // $machines = $this->Datehorometers->Machines->find('list', ['limit' => 200]);
        $this->set(compact('datehorometer'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Datehorometer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('maintenance');
        
        $datehorometer = $this->Datehorometers->get($id, [
            'contain' => ['Machines']
        ]);

        $this->loadModel('DatehorometersMachines');
        $connection = ConnectionManager::get('default');

        if ($this->request->is(['patch', 'post', 'put'])) {
            $datehorometer = $this->Datehorometers->patchEntity($datehorometer, $this->request->getData());

            $this->DatehorometersMachines->deleteAll([
                    'datehorometer_id' => $id
                ]);
            $horometers = $this->request->getData();

            for ($i=0; $i < count($horometers['datehorometers_machines']['day']); $i++) 
            {
                if (!empty($horometers['datehorometers_machines']['day'][$i]) )
                {
                    $dia = $horometers['datehorometers_machines']['day'][$i];
                }
                else
                {
                    $dia = '0.00';
                }

                if (!empty($horometers['datehorometers_machines']['night'][$i]) )
                {
                    $noche = $horometers['datehorometers_machines']['night'][$i];
                }
                else
                {
                    $noche = '0.00';
                }

                $connection->insert('datehorometers_machines', [
                    'datehorometer_id' => $id,
                    'machine_id' => $horometers['datehorometers_machines']['machine_id'][$i],
                    'day' => $dia,
                    'night' => $noche
                ]);                
            }

            $this->Flash->success(__('Guardado Correctamente.'));

            return $this->redirect(['action' => 'edit', $id]);
            // if ($this->Datehorometers->save($datehorometer)) {
            //     $this->Flash->success(__('The datehorometer has been saved.'));

            //     return $this->redirect(['action' => 'index']);
            // }
            // $this->Flash->error(__('The datehorometer could not be saved. Please, try again.'));
        }
        // $machines = $this->Datehorometers->Machines->find('list', ['limit' => 200]);

        
        $results = $connection->execute("SELECT m.id, m.name name, m.code code, ml.name model FROM machines m INNER JOIN models ml ON m.model_id = ml.id");

        $this->set('machines', $results);


        $horometerByDate = $this->DatehorometersMachines->find('all', [
                'conditions' => ['datehorometer_id' => $id]
            ]);

        $createdDate = $datehorometer->date->i18nFormat('Y-MM-dd');
        $horometerOld = $this->DatehorometersMachines->find('all', [
                'conditions' => ['date' => date("Y-m-d", strtotime($createdDate."- 1 days"))]
            ])->innerJoinWith('Datehorometers');


        // (new UsersController())->usrById($model->user_created);
        $ultimo_registro = $this->getLastDate();
        $resultado = $ultimo_registro->first();

        if ($id == $resultado->id)
        {
            
        }



        $this->set(compact('datehorometer', 'horometerByDate', 'machines', 'horometerOld'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Datehorometer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $datehorometer = $this->Datehorometers->get($id);
        if ($this->Datehorometers->delete($datehorometer)) {
            $this->Flash->success(__('The datehorometer has been deleted.'));
        } else {
            $this->Flash->error(__('The datehorometer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    private function getLastDate()
    {
        $horometer = $this->Datehorometers->find('all', [
                'order' => ['date' => 'desc']
            ]);

        return $horometer;
    }
}
