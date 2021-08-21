<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EventSupplier Controller
 *
 * @property \App\Model\Table\EventSupplierTable $EventSupplier
 * @method \App\Model\Entity\EventSupplier[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventSupplierController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $eventSupplier = $this->paginate($this->EventSupplier);

        $this->set(compact('eventSupplier'));
    }

    /**
     * View method
     *
     * @param string|null $id Event Supplier id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eventSupplier = $this->EventSupplier->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('eventSupplier'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eventSupplier = $this->EventSupplier->newEmptyEntity();
        if ($this->request->is('post')) {
            $eventSupplier = $this->EventSupplier->patchEntity($eventSupplier, $this->request->getData());
            if ($this->EventSupplier->save($eventSupplier)) {
                $this->Flash->success(__('The event supplier has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event supplier could not be saved. Please, try again.'));
        }
        $this->set(compact('eventSupplier'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Event Supplier id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eventSupplier = $this->EventSupplier->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eventSupplier = $this->EventSupplier->patchEntity($eventSupplier, $this->request->getData());
            if ($this->EventSupplier->save($eventSupplier)) {
                $this->Flash->success(__('The event supplier has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event supplier could not be saved. Please, try again.'));
        }
        $this->set(compact('eventSupplier'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Event Supplier id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eventSupplier = $this->EventSupplier->get($id);
        if ($this->EventSupplier->delete($eventSupplier)) {
            $this->Flash->success(__('The event supplier has been deleted.'));
        } else {
            $this->Flash->error(__('The event supplier could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
