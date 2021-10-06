<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Suburbs Controller
 *
 * @property \App\Model\Table\SuburbsTable $Suburbs
 * @method \App\Model\Entity\Suburb[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SuburbsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $suburbs = $this->paginate($this->Suburbs);

        $this->set(compact('suburbs'));
    }

    /**
     * View method
     *
     * @param string|null $id Suburb id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $suburb = $this->Suburbs->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('suburb'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $suburb = $this->Suburbs->newEmptyEntity();
        if ($this->request->is('post')) {
            $suburb = $this->Suburbs->patchEntity($suburb, $this->request->getData());
            if ($this->Suburbs->save($suburb)) {
                $this->Flash->success(__('The suburb has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The suburb could not be saved. Please, try again.'));
        }
        $this->set(compact('suburb'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Suburb id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $suburb = $this->Suburbs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $suburb = $this->Suburbs->patchEntity($suburb, $this->request->getData());
            if ($this->Suburbs->save($suburb)) {
                $this->Flash->success(__('The suburb has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The suburb could not be saved. Please, try again.'));
        }
        $this->set(compact('suburb'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Suburb id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $suburb = $this->Suburbs->get($id);
        if ($this->Suburbs->delete($suburb)) {
            $this->Flash->success(__('The suburb has been deleted.'));
        } else {
            $this->Flash->error(__('The suburb could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
