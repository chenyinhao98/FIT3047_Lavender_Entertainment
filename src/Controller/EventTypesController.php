<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EventTypes Controller
 *
 * @property \App\Model\Table\EventTypesTable $EventTypes
 * @method \App\Model\Entity\EventType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $eventTypes = $this->paginate($this->EventTypes);

        $this->set(compact('eventTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Event Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eventType = $this->EventTypes->get($id, [
            'contain' => ['Suppliers', 'Talents', 'Venues', 'Events'],
        ]);

        $this->set(compact('eventType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eventType = $this->EventTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $eventType = $this->EventTypes->patchEntity($eventType, $this->request->getData());
            if ($this->EventTypes->save($eventType)) {
                $this->Flash->success(__('The event type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event type could not be saved. Please, try again.'));
        }
        $suppliers = $this->EventTypes->Suppliers->find('list', ['limit' => 200]);
        $talents = $this->EventTypes->Talents->find('list', ['limit' => 200]);
        $venues = $this->EventTypes->Venues->find('list', ['limit' => 200]);
        $this->set(compact('eventType', 'suppliers', 'talents', 'venues'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Event Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eventType = $this->EventTypes->get($id, [
            'contain' => ['Suppliers', 'Talents', 'Venues'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eventType = $this->EventTypes->patchEntity($eventType, $this->request->getData());
            if ($this->EventTypes->save($eventType)) {
                $this->Flash->success(__('The event type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event type could not be saved. Please, try again.'));
        }
        $suppliers = $this->EventTypes->Suppliers->find('list', ['limit' => 200]);
        $talents = $this->EventTypes->Talents->find('list', ['limit' => 200]);
        $venues = $this->EventTypes->Venues->find('list', ['limit' => 200]);
        $this->set(compact('eventType', 'suppliers', 'talents', 'venues'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Event Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eventType = $this->EventTypes->get($id);
        if ($this->EventTypes->delete($eventType)) {
            $this->Flash->success(__('The event type has been deleted.'));
        } else {
            $this->Flash->error(__('The event type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
