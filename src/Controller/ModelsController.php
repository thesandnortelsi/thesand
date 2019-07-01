<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Models Controller
 *
 * @property \App\Model\Table\ModelsTable $Models
 *
 * @method \App\Model\Entity\Model[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ModelsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('maintenance');
    }

    public function index()
    {       

        $this->paginate = [
            'contain' => ['Manufacturers']
        ];
        $models = $this->paginate($this->Models);

        $this->set(compact('models'));
    }

    /**
     * View method
     *
     * @param string|null $id Model id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $model = $this->Models->get($id, [
            'contain' => ['Manufacturers']
        ]);

        if (!empty($model->user_created)) 
        {
            $creo = (new UsersController())->usrById($model->user_created);
        }
        if (!empty($model->user_modified)) 
        {
            $modifico = (new UsersController())->usrById($model->user_modified);
        }


        $this->set(compact('model', 'creo', 'modifico'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $model = $this->Models->newEntity();
        if ($this->request->is('post')) {
            $model->user_created = $this->Auth->user('user_id');

            $model = $this->Models->patchEntity($model, $this->request->getData());
            if ($this->Models->save($model)) {
                $this->Flash->success(__('El modelo ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Modelo no pudo ser guardada. Por favor, inténtelo nuevamente.'));
        }
        $manufacturers = $this->Models->Manufacturers->find('list', ['limit' => 200, 'conditions' => ['state' => 'ACTIVO']]);
        $this->set(compact('model', 'manufacturers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Model id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $model = $this->Models->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $model->user_modified = $this->Auth->user('user_id');

            $model = $this->Models->patchEntity($model, $this->request->getData());
            if ($this->Models->save($model)) {
                $this->Flash->success(__('El modelo ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Modelo no pudo ser guardada. Por favor, inténtelo nuevamente.'));
        }
        $manufacturers = $this->Models->Manufacturers->find('list', ['limit' => 200]);
        $this->set(compact('model', 'manufacturers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Model id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $model = $this->Models->get($id);
        if ($this->Models->delete($model)) {
            $this->Flash->success(__('El Modelo ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El Modelo no pudo ser eliminado. Por favor, inténtelo nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
