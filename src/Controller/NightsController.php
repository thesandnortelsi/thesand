<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Nights Controller
 *
 *
 * @method \App\Model\Entity\Night[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NightsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $nights = $this->paginate($this->Nights);

        $this->set(compact('nights'));
    }

    /**
     * View method
     *
     * @param string|null $id Night id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $night = $this->Nights->get($id, [
            'contain' => []
        ]);

        $this->set('night', $night);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $night = $this->Nights->newEntity();
        if ($this->request->is('post')) {
            $night = $this->Nights->patchEntity($night, $this->request->getData());
            if ($this->Nights->save($night)) {
                $this->Flash->success(__('The night has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The night could not be saved. Please, try again.'));
        }
        $this->set(compact('night'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Night id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $night = $this->Nights->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $night = $this->Nights->patchEntity($night, $this->request->getData());
            if ($this->Nights->save($night)) {
                $this->Flash->success(__('The night has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The night could not be saved. Please, try again.'));
        }
        $this->set(compact('night'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Night id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $night = $this->Nights->get($id);
        if ($this->Nights->delete($night)) {
            $this->Flash->success(__('The night has been deleted.'));
        } else {
            $this->Flash->error(__('The night could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
