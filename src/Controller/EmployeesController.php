<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Employees Controller
 *
 * @property \App\Model\Table\EmployeesTable $Employees
 *
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeesController extends AppController
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
            'contain' => ['Laborregimes', 'Educationalsituations', 'Activities', 'Contracttypes', 'Periodicityremunerations', 'Situations', 'Specialsituations', 'Paymenttypes', 'Occupationalcategories', 'Doublepayagreements', 'Payrolltypes', 'Persons', 'Proyects', 'Employeetypes']
        ];
        $employees = $this->paginate($this->Employees);

        $this->set(compact('employees'));
    }

    /**
     * View method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => ['Laborregimes', 'Educationalsituations', 'Activities', 'Contracttypes', 'Periodicityremunerations', 'Situations', 'Specialsituations', 'Paymenttypes', 'Occupationalcategories', 'Doublepayagreements', 'Payrolltypes', 'Persons', 'Proyects', 'Employeetypes', 'Dataafps', 'Databanks']
        ]);

        $this->set('employee', $employee);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employee = $this->Employees->newEntity();
        if ($this->request->is('post')) {
            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            $employee->user_created = $this->Auth->user('id');
            
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $laborregimes = $this->Employees->Laborregimes->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'description']);

        $educationalsituations = $this->Employees->Educationalsituations->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'description']);
        
        $activities = $this->Employees->Activities->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'description']);

        $contracttypes = $this->Employees->Contracttypes->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'description']);

        $periodicityremunerations = $this->Employees->Periodicityremunerations->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'description']);
        
        $situations = $this->Employees->Situations->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'description']);

        $specialsituations = $this->Employees->Specialsituations->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'description']);

        $paymenttypes = $this->Employees->Paymenttypes->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'description']);
        
        $occupationalcategories = $this->Employees->Occupationalcategories->find(
                            'list', 
                            [
                                'limit' => 200,
                                'keyField' => 'id',
                                'valueField' => function ($occupationalcategory) {
                                    return $occupationalcategory->code_sunat.' - '.$occupationalcategory->description;
                                }
                            ]
                        );


        $doublepayagreements = $this->Employees->Doublepayagreements->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'description']);

        $payrolltypes = $this->Employees->Payrolltypes->find(
                            'list', 
                            [
                                'limit' => 200,
                                'keyField' => 'id',
                                'valueField' => 'description',
                            ]
                        );

        $persons = $this->Employees->Persons->find(
                            'list', 
                            [
                                'limit' => 200,
                                'keyField' => 'id',
                                'valueField' => function ($person) {
                                    return $person->document.' - '.$person->surname_father.' '.$person->surname_mother.' '.$person->name;
                                }
                            ]
                        );



        $proyects = $this->Employees->Proyects->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'name']);

        $employeetypes = $this->Employees->Employeetypes->find(
                            'list', 
                            [
                                'limit' => 200,
                                'keyField' => 'id',
                                'valueField' => function ($employeetype) {
                                    return $employeetype->code_sunat.' - '.$employeetype->abbreviated_description;
                                }
                            ]
                        );


        $positions = $this->Employees->Positions->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'name']);
        $tasks = $this->Employees->Tasks->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'name']);
        $areas = $this->Employees->Areas->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'name']);
        $specialities = $this->Employees->Specialities ->find('list', ['limit' => 200, 'keyField' => 'id', 'valueField' => 'name']);




        $this->set(compact('employee', 'laborregimes', 'educationalsituations', 'activities', 'contracttypes', 'periodicityremunerations', 'situations', 'specialsituations', 'paymenttypes', 'occupationalcategories', 'doublepayagreements', 'payrolltypes', 'persons', 'proyects', 'employeetypes', 'positions', 'tasks', 'areas',  'specialities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $laborregimes = $this->Employees->Laborregimes->find('list', ['limit' => 200]);
        $educationalsituations = $this->Employees->Educationalsituations->find('list', ['limit' => 200]);
        $activities = $this->Employees->Activities->find('list', ['limit' => 200]);
        $contracttypes = $this->Employees->Contracttypes->find('list', ['limit' => 200]);
        $periodicityremunerations = $this->Employees->Periodicityremunerations->find('list', ['limit' => 200]);
        $situations = $this->Employees->Situations->find('list', ['limit' => 200]);
        $specialsituations = $this->Employees->Specialsituations->find('list', ['limit' => 200]);
        $paymenttypes = $this->Employees->Paymenttypes->find('list', ['limit' => 200]);
        $occupationalcategories = $this->Employees->Occupationalcategories->find('list', ['limit' => 200]);
        $doublepayagreements = $this->Employees->Doublepayagreements->find('list', ['limit' => 200]);
        $payrolltypes = $this->Employees->Payrolltypes->find('list', ['limit' => 200]);
        $persons = $this->Employees->Persons->find('list', ['limit' => 200]);
        $proyects = $this->Employees->Proyects->find('list', ['limit' => 200]);
        $employeetypes = $this->Employees->Employeetypes->find('list', ['limit' => 200]);
        $this->set(compact('employee', 'laborregimes', 'educationalsituations', 'activities', 'contracttypes', 'periodicityremunerations', 'situations', 'specialsituations', 'paymenttypes', 'occupationalcategories', 'doublepayagreements', 'payrolltypes', 'persons', 'proyects', 'employeetypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employee = $this->Employees->get($id);
        if ($this->Employees->delete($employee)) {
            $this->Flash->success(__('The employee has been deleted.'));
        } else {
            $this->Flash->error(__('The employee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
