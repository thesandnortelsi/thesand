<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ubigeos Controller
 *
 * @property \App\Model\Table\UbigeosTable $Ubigeos
 *
 * @method \App\Model\Entity\Ubigeo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UbigeosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ubigeos = $this->paginate($this->Ubigeos);

        $this->set(compact('ubigeos'));
    }

    /**
     * View method
     *
     * @param string|null $id Ubigeo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ubigeo = $this->Ubigeos->get($id, [
            'contain' => []
        ]);

        $this->set('ubigeo', $ubigeo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ubigeo = $this->Ubigeos->newEntity();
        if ($this->request->is('post')) {
            $ubigeo = $this->Ubigeos->patchEntity($ubigeo, $this->request->getData());
            if ($this->Ubigeos->save($ubigeo)) {
                $this->Flash->success(__('The ubigeo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ubigeo could not be saved. Please, try again.'));
        }
        $this->set(compact('ubigeo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ubigeo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ubigeo = $this->Ubigeos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ubigeo = $this->Ubigeos->patchEntity($ubigeo, $this->request->getData());
            if ($this->Ubigeos->save($ubigeo)) {
                $this->Flash->success(__('The ubigeo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ubigeo could not be saved. Please, try again.'));
        }
        $this->set(compact('ubigeo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ubigeo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ubigeo = $this->Ubigeos->get($id);
        if ($this->Ubigeos->delete($ubigeo)) {
            $this->Flash->success(__('The ubigeo has been deleted.'));
        } else {
            $this->Flash->error(__('The ubigeo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
