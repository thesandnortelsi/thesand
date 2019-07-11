<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Employeedataaditionals Controller
 *
 * @property \App\Model\Table\EmployeedataaditionalsTable $Employeedataaditionals
 *
 * @method \App\Model\Entity\Employeedataaditional[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeedataaditionalsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('default2');
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employeeworkinformations']
        ];
        $employeedataaditionals = $this->paginate($this->Employeedataaditionals);

        $this->set(compact('employeedataaditionals'));
    }

    /**
     * View method
     *
     * @param string|null $id Employeedataaditional id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employeedataaditional = $this->Employeedataaditionals->get($id, [
            'contain' => ['Employeeworkinformations']
        ]);

        $this->set('employeedataaditional', $employeedataaditional);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($idemployeeworkinformation = null)
    {
        $employeedataaditional = $this->Employeedataaditionals->newEntity();
        if ($this->request->is('post')) {
            $employeedataaditional = $this->Employeedataaditionals->patchEntity($employeedataaditional, $this->request->getData());
            if ($this->Employeedataaditionals->save($employeedataaditional)) {
                $this->Flash->success(__('The employeedataaditional has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employeedataaditional could not be saved. Please, try again.'));
        }


        $employeeworkinformations = $this->Employeedataaditionals->Employeeworkinformations->find(
                                        'list',
                                        [
                                            'conditions' => [
                                                                'id' => $idemployeeworkinformation
                                                            ],
                                            'keyField' => 'id',
                                            'valueField' => function ($ewinformation) {
                                                return $ewinformation->employeepersonalinformation_id.' - '.$ewinformation->ruc;
                                            }
                                        ]
                                    );

        // $blog->aricle->comment->description

        // $articles = $this->Employeedataaditionals->Employeeworkinformations->find(
        //                                     'list',
        //                                     [
        //                                         'conditions' => [
        //                                                             'id' => $idemployeeworkinformation
        //                                                         ],
        //                                         'keyField' => 'id',
        //                                         'valueField' => function ($ewinformation) {
        //                                             return $ewinformation->employeepersonalinformation_id.' - '.$ewinformation->employeepersonalinformation->surname_father.' '.$ewinformation->employeepersonalinformation->surname_mother.' '.$ewinformation->employeepersonalinformation->name;
        //                                         }
        //                                     ]
        //                                 );
                                        // ->contain(
                                        // 'Employeepersonalinformations', 
                                        // function (Query $q) {
                                        //     return $q
                                        //         ->select(['id', 'document']);
                                        //     }
                                        // );

        //$articles = $this->Employeedataaditionals->Employeeworkinformations->find()->all();
        //$withMore = $this->Employeeworkinformations->loadInto($articles, ['Employeepersonalinformations']);

        //print_r($articles);


        $this->set(compact('employeedataaditional', 'employeeworkinformations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employeedataaditional id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employeedataaditional = $this->Employeedataaditionals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employeedataaditional = $this->Employeedataaditionals->patchEntity($employeedataaditional, $this->request->getData());
            if ($this->Employeedataaditionals->save($employeedataaditional)) {
                $this->Flash->success(__('The employeedataaditional has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employeedataaditional could not be saved. Please, try again.'));
        }
        $employeeworkinformations = $this->Employeedataaditionals->Employeeworkinformations->find('list', ['limit' => 200]);
        $this->set(compact('employeedataaditional', 'employeeworkinformations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employeedataaditional id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employeedataaditional = $this->Employeedataaditionals->get($id);
        if ($this->Employeedataaditionals->delete($employeedataaditional)) {
            $this->Flash->success(__('The employeedataaditional has been deleted.'));
        } else {
            $this->Flash->error(__('The employeedataaditional could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
