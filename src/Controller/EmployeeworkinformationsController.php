<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Employeeworkinformations Controller
 *
 * @property \App\Model\Table\EmployeeworkinformationsTable $Employeeworkinformations
 *
 * @method \App\Model\Entity\Employeeworkinformation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeeworkinformationsController extends AppController
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
            'contain' => ['Laborregimes', 'Educationalsituations', 'Activities', 'Contracttypes', 'Periodicityremunerations', 'Situations', 'Specialsituations', 'Paymenttypes', 'Occupationalcategories', 'Doublepayagreements', 'Payrolltypes', 'Proyects', 'Employeetypes', 'Positions', 'Tasks', 'Areas', 'Specialities', 'Employeepersonalinformations']
        ];
        $employeeworkinformations = $this->paginate($this->Employeeworkinformations);

        $this->set(compact('employeeworkinformations'));
    }

    /**
     * View method
     *
     * @param string|null $id Employeeworkinformation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employeeworkinformation = $this->Employeeworkinformations->get($id, [
            'contain' => ['Laborregimes', 'Educationalsituations', 'Activities', 'Contracttypes', 'Periodicityremunerations', 'Situations', 'Specialsituations', 'Paymenttypes', 'Occupationalcategories', 'Doublepayagreements', 'Payrolltypes', 'Proyects', 'Employeetypes', 'Positions', 'Tasks', 'Areas', 'Specialities', 'Employeepersonalinformations', 'Dataafps', 'Databanks', 'Payrolldetails', 'Residencecontrols']
        ]);

        $this->set('employeeworkinformation', $employeeworkinformation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($idemployeepersonalinformation = null)
    {
        $employeeworkinformation = $this->Employeeworkinformations->newEntity();
        if ($this->request->is('post')) {
            $employeeworkinformation = $this->Employeeworkinformations->patchEntity($employeeworkinformation, $this->request->getData());
            $employeeworkinformation->user_created = $this->Auth->user('id');

            if ($this->Employeeworkinformations->save($employeeworkinformation)) {
                $this->Flash->success(__('The employeeworkinformation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employeeworkinformation could not be saved. Please, try again.'));
        }
        $laborregimes = $this->Employeeworkinformations->Laborregimes->find('list', ['keyField' => 'id', 'valueField' => 'description']);
        $educationalsituations = $this->Employeeworkinformations->Educationalsituations->find('list', ['keyField' => 'id', 'valueField' => 'description']);
        $activities = $this->Employeeworkinformations->Activities->find('list', ['keyField' => 'id', 'valueField' => 'description']);
        $contracttypes = $this->Employeeworkinformations->Contracttypes->find('list', ['keyField' => 'id', 'valueField' => 'description']);
        $periodicityremunerations = $this->Employeeworkinformations->Periodicityremunerations->find('list', ['keyField' => 'id', 'valueField' => 'description']);
        $situations = $this->Employeeworkinformations->Situations->find('list', ['keyField' => 'id', 'valueField' => 'description']);
        $specialsituations = $this->Employeeworkinformations->Specialsituations->find('list', ['keyField' => 'id', 'valueField' => 'description']);
        $paymenttypes = $this->Employeeworkinformations->Paymenttypes->find('list', ['keyField' => 'id', 'valueField' => 'description']);
        $occupationalcategories = $this->Employeeworkinformations->Occupationalcategories->find('list', ['keyField' => 'id', 'valueField' => 'description']);
        $doublepayagreements = $this->Employeeworkinformations->Doublepayagreements->find('list', ['keyField' => 'id', 'valueField' => 'description']);
        $payrolltypes = $this->Employeeworkinformations->Payrolltypes->find('list', ['keyField' => 'id', 'valueField' => 'description']);
        $proyects = $this->Employeeworkinformations->Proyects->find('list', ['keyField' => 'id', 'valueField' => 'name']);
        $employeetypes = $this->Employeeworkinformations->Employeetypes->find('list', ['keyField' => 'id', 'valueField' => 'description']);
        $positions = $this->Employeeworkinformations->Positions->find('list');
        $tasks = $this->Employeeworkinformations->Tasks->find('list');
        $areas = $this->Employeeworkinformations->Areas->find('list');
        $specialities = $this->Employeeworkinformations->Specialities->find('list');

        // $employeepersonalinformations = $this->Employeeworkinformations->employeepersonalinformations->find('list', ['limit' => 200]);
        $employeepersonalinformations = $this->Employeeworkinformations->employeepersonalinformations->find(
                                        'list',
                                        [
                                            'conditions' => [
                                                                'id' => $idemployeepersonalinformation
                                                            ],
                                            'keyField' => 'id',
                                            'valueField' => function ($employeepersonalinformation) {
                                                return $employeepersonalinformation->document.' - '.$employeepersonalinformation->surname_father.' '.$employeepersonalinformation->surname_mother.' '.$employeepersonalinformation->name;
                                            }

                                        ]
                                    );

        $this->set(compact('employeepersonalinformations', 'employeeworkinformation', 'laborregimes', 'educationalsituations', 'activities', 'contracttypes', 'periodicityremunerations', 'situations', 'specialsituations', 'paymenttypes', 'occupationalcategories', 'doublepayagreements', 'payrolltypes', 'proyects', 'employeetypes', 'positions', 'tasks', 'areas', 'specialities','idemployeepersonalinformation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employeeworkinformation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employeeworkinformation = $this->Employeeworkinformations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employeeworkinformation = $this->Employeeworkinformations->patchEntity($employeeworkinformation, $this->request->getData());
            if ($this->Employeeworkinformations->save($employeeworkinformation)) {
                $this->Flash->success(__('The employeeworkinformation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employeeworkinformation could not be saved. Please, try again.'));
        }
        $laborregimes = $this->Employeeworkinformations->Laborregimes->find('list', ['limit' => 200]);
        $educationalsituations = $this->Employeeworkinformations->Educationalsituations->find('list', ['limit' => 200]);
        $activities = $this->Employeeworkinformations->Activities->find('list', ['limit' => 200]);
        $contracttypes = $this->Employeeworkinformations->Contracttypes->find('list', ['limit' => 200]);
        $periodicityremunerations = $this->Employeeworkinformations->Periodicityremunerations->find('list', ['limit' => 200]);
        $situations = $this->Employeeworkinformations->Situations->find('list', ['limit' => 200]);
        $specialsituations = $this->Employeeworkinformations->Specialsituations->find('list', ['limit' => 200]);
        $paymenttypes = $this->Employeeworkinformations->Paymenttypes->find('list', ['limit' => 200]);
        $occupationalcategories = $this->Employeeworkinformations->Occupationalcategories->find('list', ['limit' => 200]);
        $doublepayagreements = $this->Employeeworkinformations->Doublepayagreements->find('list', ['limit' => 200]);
        $payrolltypes = $this->Employeeworkinformations->Payrolltypes->find('list', ['limit' => 200]);
        $proyects = $this->Employeeworkinformations->Proyects->find('list', ['limit' => 200]);
        $employeetypes = $this->Employeeworkinformations->Employeetypes->find('list', ['limit' => 200]);
        $positions = $this->Employeeworkinformations->Positions->find('list', ['limit' => 200]);
        $tasks = $this->Employeeworkinformations->Tasks->find('list', ['limit' => 200]);
        $areas = $this->Employeeworkinformations->Areas->find('list', ['limit' => 200]);
        $specialities = $this->Employeeworkinformations->Specialities->find('list', ['limit' => 200]);
        $employeepersonalinformations = $this->Employeeworkinformations->Employeepersonalinformations->find('list', ['limit' => 200]);
        $this->set(compact('employeeworkinformation', 'laborregimes', 'educationalsituations', 'activities', 'contracttypes', 'periodicityremunerations', 'situations', 'specialsituations', 'paymenttypes', 'occupationalcategories', 'doublepayagreements', 'payrolltypes', 'proyects', 'employeetypes', 'positions', 'tasks', 'areas', 'specialities', 'employeepersonalinformations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employeeworkinformation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employeeworkinformation = $this->Employeeworkinformations->get($id);
        if ($this->Employeeworkinformations->delete($employeeworkinformation)) {
            $this->Flash->success(__('The employeeworkinformation has been deleted.'));
        } else {
            $this->Flash->error(__('The employeeworkinformation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
