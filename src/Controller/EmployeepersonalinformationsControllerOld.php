<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Employeepersonalinformations Controller
 *
 * @property \App\Model\Table\EmployeepersonalinformationsTable $Employeepersonalinformations
 *
 * @method \App\Model\Entity\Employeepersonalinformation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeepersonalinformationsController extends AppController
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
            'contain' => ['Documenttypes', 'Geographicallocations', 'Nationalities', 'Sendingcountries', 'Streettypes', 'Zonetypes']
        ];
        $employeepersonalinformations = $this->paginate($this->Employeepersonalinformations);

        $this->set(compact('employeepersonalinformations'));
    }

    /**
     * View method
     *
     * @param string|null $id Employeepersonalinformation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employeepersonalinformation = $this->Employeepersonalinformations->get($id, [
            'contain' => ['Documenttypes', 'Geographicallocations', 'Nationalities', 'Sendingcountries', 'Streettypes', 'Zonetypes']
        ]);

        $this->set('employeepersonalinformation', $employeepersonalinformation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employeepersonalinformation = $this->Employeepersonalinformations->newEntity();
        if ($this->request->is('post')) {
            $employeepersonalinformation = $this->Employeepersonalinformations->patchEntity($employeepersonalinformation, $this->request->getData());
            $employeepersonalinformation->user_created = $this->Auth->user('id');

            if ($this->Employeepersonalinformations->save($employeepersonalinformation)) {
                $this->Flash->success(__('The employeepersonalinformation has been saved.'));

                return $this->redirect(['controller'=>'Employeeworkinformations', 'action' => 'add', $employeepersonalinformation->id]);
            }
            $this->Flash->error(__('The employeepersonalinformation could not be saved. Please, try again.'));
        }
        
        $documenttypes = $this->Employeepersonalinformations->Documenttypes->find('list', ['limit' => 200,  'keyField' => 'id', 'valueField' => 'abbreviated_description']);
        $geographicallocations = $this->Employeepersonalinformations->Geographicallocations->find('list', ['limit' => 200,  'keyField' => 'id', 'valueField' => 'populated_center']);
        $nationalities = $this->Employeepersonalinformations->Nationalities->find('list', ['limit' => 200,  'keyField' => 'id', 'valueField' => 'description']);
        $sendingcountries = $this->Employeepersonalinformations->Sendingcountries->find('list', ['limit' => 200,  'keyField' => 'id', 'valueField' => 'description']);
        $streettypes = $this->Employeepersonalinformations->Streettypes->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'description']);

        $zonetypes = $this->Employeepersonalinformations->Zonetypes->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'description']);

        // $departments = $this->loadModel('Departments')->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'description']);

        $departmentos = array('1' => 'Amazonas', '2' => 'Cajamarca');

        $this->set(compact('employeepersonalinformation', 'documenttypes', 'geographicallocations', 'nationalities', 'sendingcountries', 'streettypes', 'zonetypes', 'departmentos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employeepersonalinformation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employeepersonalinformation = $this->Employeepersonalinformations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employeepersonalinformation = $this->Employeepersonalinformations->patchEntity($employeepersonalinformation, $this->request->getData());
            $employeepersonalinformation->user_modified = $this->Auth->user('id');
            
            if ($this->Employeepersonalinformations->save($employeepersonalinformation)) {
                $this->Flash->success(__('The employeepersonalinformation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employeepersonalinformation could not be saved. Please, try again.'));
        }
        // $documenttypes = $this->Employeepersonalinformations->Documenttypes->find('list', ['limit' => 200]);
        // $geographicallocations = $this->Employeepersonalinformations->Geographicallocations->find('list', ['limit' => 200]);
        // $nationalities = $this->Employeepersonalinformations->Nationalities->find('list', ['limit' => 200]);
        // $sendingcountries = $this->Employeepersonalinformations->Sendingcountries->find('list', ['limit' => 200]);
        // $streettypes = $this->Employeepersonalinformations->Streettypes->find('list', ['limit' => 200]);
        // $zonetypes = $this->Employeepersonalinformations->Zonetypes->find('list', ['limit' => 200]);
        // $this->set(compact('employeepersonalinformation', 'documenttypes', 'geographicallocations', 'nationalities', 'sendingcountries', 'streettypes', 'zonetypes'));

        $documenttypes = $this->Employeepersonalinformations->Documenttypes->find('list', ['limit' => 200,  'keyField' => 'id', 'valueField' => 'abbreviated_description']);
        $geographicallocations = $this->Employeepersonalinformations->Geographicallocations->find('list', ['limit' => 200,  'keyField' => 'id', 'valueField' => 'populated_center']);
        $nationalities = $this->Employeepersonalinformations->Nationalities->find('list', ['limit' => 200,  'keyField' => 'id', 'valueField' => 'description']);
        $sendingcountries = $this->Employeepersonalinformations->Sendingcountries->find('list', ['limit' => 200,  'keyField' => 'id', 'valueField' => 'description']);
        $streettypes = $this->Employeepersonalinformations->Streettypes->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'description']);
        $zonetypes = $this->Employeepersonalinformations->Zonetypes->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'description']);
        
        $departmentos = array('1' => 'Amazonas', '2' => 'Cajamarca');

        $this->set(compact('employeepersonalinformation', 'documenttypes', 'geographicallocations', 'nationalities', 'sendingcountries', 'streettypes', 'zonetypes', 'departmentos'));

    }

    /**
     * Delete method
     *
     * @param string|null $id Employeepersonalinformation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employeepersonalinformation = $this->Employeepersonalinformations->get($id);
        if ($this->Employeepersonalinformations->delete($employeepersonalinformation)) {
            $this->Flash->success(__('The employeepersonalinformation has been deleted.'));
        } else {
            $this->Flash->error(__('The employeepersonalinformation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
