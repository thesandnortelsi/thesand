<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Rols Controller
 *
 *
 * @method \App\Model\Entity\Rol[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RolsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $rols = $this->paginate($this->Rols);

        $this->set(compact('rols'));
    }

    /**
     * View method
     *
     * @param string|null $id Rol id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rol = $this->Rols->get($id, [
            'contain' => []
        ]);

        $this->set('rol', $rol);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rol = $this->Rols->newEntity();
        if ($this->request->is('post')) {
            $rol = $this->Rols->patchEntity($rol, $this->request->getData());
            if ($this->Rols->save($rol)) {
                $this->Flash->success(__('The rol has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rol could not be saved. Please, try again.'));
        }
        $this->set(compact('rol'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rol id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rol = $this->Rols->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rol = $this->Rols->patchEntity($rol, $this->request->getData());
            if ($this->Rols->save($rol)) {
                $this->Flash->success(__('The rol has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rol could not be saved. Please, try again.'));
        }
        $this->set(compact('rol'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rol id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rol = $this->Rols->get($id);
        if ($this->Rols->delete($rol)) {
            $this->Flash->success(__('The rol has been deleted.'));
        } else {
            $this->Flash->error(__('The rol could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
