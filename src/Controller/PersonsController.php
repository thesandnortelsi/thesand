<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Persons Controller
 *
<<<<<<< HEAD
=======
 * @property \App\Model\Table\PersonsTable $Persons
>>>>>>> 7747fcb38dddfd4c2886690f21b823f2e4b82de5
 *
 * @method \App\Model\Entity\Person[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PersonsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
<<<<<<< HEAD
=======
        $this->paginate = [
            'contain' => ['IdentificationDocuments', 'Addresses']
        ];
>>>>>>> 7747fcb38dddfd4c2886690f21b823f2e4b82de5
        $persons = $this->paginate($this->Persons);

        $this->set(compact('persons'));
    }

    /**
     * View method
     *
     * @param string|null $id Person id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $person = $this->Persons->get($id, [
<<<<<<< HEAD
            'contain' => []
=======
            'contain' => ['IdentificationDocuments', 'Addresses']
>>>>>>> 7747fcb38dddfd4c2886690f21b823f2e4b82de5
        ]);

        $this->set('person', $person);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $person = $this->Persons->newEntity();
        if ($this->request->is('post')) {
            $person = $this->Persons->patchEntity($person, $this->request->getData());
            if ($this->Persons->save($person)) {
                $this->Flash->success(__('The person has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The person could not be saved. Please, try again.'));
        }
<<<<<<< HEAD
        $this->set(compact('person'));
=======
        $identificationDocuments = $this->Persons->IdentificationDocuments->find('list', ['limit' => 200]);
        $addresses = $this->Persons->Addresses->find('list', ['limit' => 200]);
        $this->set(compact('person', 'identificationDocuments', 'addresses'));
>>>>>>> 7747fcb38dddfd4c2886690f21b823f2e4b82de5
    }

    /**
     * Edit method
     *
     * @param string|null $id Person id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $person = $this->Persons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $person = $this->Persons->patchEntity($person, $this->request->getData());
            if ($this->Persons->save($person)) {
                $this->Flash->success(__('The person has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The person could not be saved. Please, try again.'));
        }
<<<<<<< HEAD
        $this->set(compact('person'));
=======
        $identificationDocuments = $this->Persons->IdentificationDocuments->find('list', ['limit' => 200]);
        $addresses = $this->Persons->Addresses->find('list', ['limit' => 200]);
        $this->set(compact('person', 'identificationDocuments', 'addresses'));
>>>>>>> 7747fcb38dddfd4c2886690f21b823f2e4b82de5
    }

    /**
     * Delete method
     *
     * @param string|null $id Person id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $person = $this->Persons->get($id);
        if ($this->Persons->delete($person)) {
            $this->Flash->success(__('The person has been deleted.'));
        } else {
            $this->Flash->error(__('The person could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
