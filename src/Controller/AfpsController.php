<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Afps Controller
 *
 * @property \App\Model\Table\AfpsTable $Afps
 *
 * @method \App\Model\Entity\Afp[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AfpsController extends AppController
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
        $afps = $this->paginate($this->Afps);

        $this->set(compact('afps'));
    }

    /**
     * View method
     *
     * @param string|null $id Afp id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $afp = $this->Afps->get($id, [
            'contain' => ['Dataafps']
        ]);

        $this->set('afp', $afp);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $afp = $this->Afps->newEntity();
        if ($this->request->is('post')) {
            $afp = $this->Afps->patchEntity($afp, $this->request->getData());

            $afp->user_created = $this->Auth->user('id');

            if ($this->Afps->save($afp)) {
                $this->Flash->success(__('La AFP ha sido guardada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La AFP no pudo ser guardada. Por favor, inténtelo nuevamente.'));
        }
        $this->set(compact('afp'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Afp id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $afp = $this->Afps->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $afp = $this->Afps->patchEntity($afp, $this->request->getData());
            $afp->user_modified = $this->Auth->user('id');

            if ($this->Afps->save($afp)) {
                $this->Flash->success(__('La AFP ha sido guardada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La AFP no pudo ser guardada. Por favor, inténtelo nuevamente.'));
        }
        $this->set(compact('afp'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Afp id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $afp = $this->Afps->get($id);
        if ($this->Afps->delete($afp)) {
            $this->Flash->success(__('La AFP ha sido eliminada.'));
        } else {
            $this->Flash->error(__('La AFP no pudo ser eliminada. Por favor, inténtelo nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
