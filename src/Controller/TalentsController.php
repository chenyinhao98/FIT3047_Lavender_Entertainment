<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Talents Controller
 *
 * @property \App\Model\Table\TalentsTable $Talents
 * @method \App\Model\Entity\Talent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TalentsController extends AppController
{
    public $paginate = [
        'limit' => 100
    ];
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $talents = $this->paginate($this->Talents);

        $this->set(compact('talents'));
    }

    /**
     * View method
     *
     * @param string|null $id Talent id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $talent = $this->Talents->get($id, [
            'contain' => ['EventTypes', 'Events', 'TalentAvailability', 'TalentSuburb'],
        ]);

        $this->set(compact('talent'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $talent = $this->Talents->newEmptyEntity();
        if ($this->request->is('post')) {
            $talent = $this->Talents->patchEntity($talent, $this->request->getData());
            if ($this->Talents->save($talent)) {
                $this->Flash->success(__('The talent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The talent could not be saved. Please, try again.'));
        }
        $eventTypes = $this->Talents->EventTypes->find('list', ['limit' => 200]);
        $events = $this->Talents->Events->find('list', ['limit' => 200]);

        $eTs = $this->Talents->EventTypes->find('list',[
            'keyField' => 'id',
            'valueField' => 'event_name'
        ]);

        $this->set(compact('talent', 'eventTypes', 'events','eTs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Talent id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $talent = $this->Talents->get($id, [
            'contain' => ['EventTypes', 'Events'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $talent = $this->Talents->patchEntity($talent, $this->request->getData());
            if ($this->Talents->save($talent)) {
                $this->Flash->success(__('The talent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The talent could not be saved. Please, try again.'));
        }
        $eventTypes = $this->Talents->EventTypes->find('list', ['limit' => 200]);
        $events = $this->Talents->Events->find('list', ['limit' => 200]);

        $eTs = $this->Venues->EventTypes->find('list',[
            'keyField' => 'id',
            'valueField' => 'event_name'
        ]);

        $this->set(compact('talent', 'eventTypes', 'events','eTs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Talent id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $talent = $this->Talents->get($id);
        if ($this->Talents->delete($talent)) {
            $this->Flash->success(__('The talent has been deleted.'));
        } else {
            $this->Flash->error(__('The talent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
