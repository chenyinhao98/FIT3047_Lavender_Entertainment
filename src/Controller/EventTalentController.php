<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EventTalent Controller
 *
 * @property \App\Model\Table\EventTalentTable $EventTalent
 * @method \App\Model\Entity\EventTalent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventTalentController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $eventTalent = $this->paginate($this->EventTalent);

        $this->set(compact('eventTalent'));
    }

    /**
     * View method
     *
     * @param string|null $id Event Talent id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eventTalent = $this->EventTalent->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('eventTalent'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eventTalent = $this->EventTalent->newEmptyEntity();
        if ($this->request->is('post')) {
            $eventTalent = $this->EventTalent->patchEntity($eventTalent, $this->request->getData());
            if ($this->EventTalent->save($eventTalent)) {
                $this->Flash->success(__('The event talent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event talent could not be saved. Please, try again.'));
        }
        $this->set(compact('eventTalent'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Event Talent id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eventTalent = $this->EventTalent->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eventTalent = $this->EventTalent->patchEntity($eventTalent, $this->request->getData());
            if ($this->EventTalent->save($eventTalent)) {
                $this->Flash->success(__('The event talent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event talent could not be saved. Please, try again.'));
        }
        $this->set(compact('eventTalent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Event Talent id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eventTalent = $this->EventTalent->get($id);
        if ($this->EventTalent->delete($eventTalent)) {
            $this->Flash->success(__('The event talent has been deleted.'));
        } else {
            $this->Flash->error(__('The event talent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
