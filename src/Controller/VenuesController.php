<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Venues Controller
 * @param string|null $name
 * @property \App\Model\Table\VenuesTable $Venues
 * @method \App\Model\Entity\Venue[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VenuesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $venues = $this->paginate($this->Venues);

        $this->set(compact('venues'));
    }

    public function home()
    {
        $venues = $this->paginate($this->Venues);

        $this->set(compact('venues'));
    }

    public function result($name=null)
    {
        $venues = $this->paginate($this->Venues);
        $this->set(compact('venues'));

        /*
        $query = $this->Venues->find()->where(['venue_address LIKE' => '%' . $name .'%']);
        //this line works with hardcoded value such as 'Clayton'
        $this->set(compact('venues','query'));
        */

        /*
        $search_venue = array();

        if (empty($name)){
            for ($x = 0; $x <= count($venues);$x++){
                $this->$search_venue->save($venues[$x]);
            }
        }
        else{
            for ($x = 0; $x <= count($venues);$x++){
                if (strpos($venues[$x] ->venue_address,$name) !== false ){
                    array_push($search_venue,$venues[$x]);
                }
            }
        }
       */


    }
    /**
     * Individual method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function individual($id=null)
    {


        $venue = $this->Venues->get($id, [
            'contain' => ['EventTypes', 'Events'],
        ]);

        $this->set(compact('venue'));

    }

    /**
     * View method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $venue = $this->Venues->get($id, [
            'contain' => ['EventTypes', 'Events'],
        ]);

        $this->set(compact('venue'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $venue = $this->Venues->newEmptyEntity();
        if ($this->request->is('post')) {
            $venue = $this->Venues->patchEntity($venue, $this->request->getData());
            if ($this->Venues->save($venue)) {
                $this->Flash->success(__('The venue has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The venue could not be saved. Please, try again.'));
        }
        $eventTypes = $this->Venues->EventTypes->find('list', ['limit' => 200]);
        $this->set(compact('venue', 'eventTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $venue = $this->Venues->get($id, [
            'contain' => ['EventTypes'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $venue = $this->Venues->patchEntity($venue, $this->request->getData());
            if ($this->Venues->save($venue)) {
                $this->Flash->success(__('The venue has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The venue could not be saved. Please, try again.'));
        }
        $eventTypes = $this->Venues->EventTypes->find('list', ['limit' => 200]);
        $this->set(compact('venue', 'eventTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $venue = $this->Venues->get($id);
        if ($this->Venues->delete($venue)) {
            $this->Flash->success(__('The venue has been deleted.'));
        } else {
            $this->Flash->error(__('The venue could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
