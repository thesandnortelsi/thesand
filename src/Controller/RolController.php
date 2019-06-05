<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Rol Controller
 *
 * @property \App\Model\Table\RolTable $Rol
 *
 * @method \App\Model\Entity\Rol[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RolController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $rols = $this->paginate($this->Rol);
        $this->set('rol', $rols);
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
        $rol = $this->Rol->get($id, [
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
        $rol = $this->Rol->newEntity();
        if ($this->request->is('post')) {
            $rol = $this->Rol->patchEntity($rol, $this->request->getData());
            if ($this->Rol->save($rol)) {
                $this->Flash->success(__('Rol guardado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Rol no pudo ser guardado. Por favor, intenta nuevamente.'));
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
        $rol = $this->Rol->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rol = $this->Rol->patchEntity($rol, $this->request->getData());
            if ($this->Rol->save($rol)) {
                $this->Flash->success(__('Rol guardado correctamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Rol no pudo ser guardado. Por favor, intenta nuevamente.'));
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
        $rol = $this->Rol->get($id);
        if ($this->Rol->delete($rol)) {
            $this->Flash->success(__('Rol ha sido borrado.'));
        } else {
            $this->Flash->error(__('Rol no pudo ser borrado. Por favor, intenta nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
