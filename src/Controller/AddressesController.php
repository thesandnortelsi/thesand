<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Addresses Controller
 *
 * @property \App\Model\Table\AddressesTable $Addresses
 *
 * @method \App\Model\Entity\Address[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AddressesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Ubigeos']
        ];
        $addresses = $this->paginate($this->Addresses);

        $this->set(compact('addresses'));
    }

    /**
     * View method
     *
     * @param string|null $id Address id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $address = $this->Addresses->get($id, [
            'contain' => ['Ubigeos']
        ]);

        $this->set('address', $address);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $address = $this->Addresses->newEntity();
        if ($this->request->is('post')) {
            $address = $this->Addresses->patchEntity($address, $this->request->getData());
            if ($this->Addresses->save($address)) {
                $this->Flash->success(__('The address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The address could not be saved. Please, try again.'));
        }
        $ubigeos = $this->Addresses->Ubigeos->find('list', ['limit' => 200]);
        $this->set(compact('address', 'ubigeos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Address id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $address = $this->Addresses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $address = $this->Addresses->patchEntity($address, $this->request->getData());
            if ($this->Addresses->save($address)) {
                $this->Flash->success(__('The address has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The address could not be saved. Please, try again.'));
        }
        $ubigeos = $this->Addresses->Ubigeos->find('list', ['limit' => 200]);
        $this->set(compact('address', 'ubigeos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Address id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $address = $this->Addresses->get($id);
        if ($this->Addresses->delete($address)) {
            $this->Flash->success(__('The address has been deleted.'));
        } else {
            $this->Flash->error(__('The address could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
