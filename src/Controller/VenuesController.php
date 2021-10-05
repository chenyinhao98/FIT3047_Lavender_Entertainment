<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Venues Controller
 *
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

    public function result()
    {
        $venues = $this->paginate($this->Venues);

        $this->set(compact('venues'));
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
     * Cart method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function cart($id=null)
    {
        

        $venue = $this->Venues->get($id, [
            'contain' => ['EventTypes', 'Events'],
        ]);

        $guestNumber = $this->getRequest()->getQuery('guest_count');
        

        $payrate= $venue->venue_payrate;


///////
        if(isset($_GET['update'])) { //Use $_GET if it's a GET request
            //Save the values in variable
            $guestcount = $_GET['guest-count']; 
            $rate = $_GET['venue_payrate'];
     
            //Calculate here
            $total = $guestcount * $rate;
        

        }
        $this->set(compact('venue','subtotal'));


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

    

    public function getCount() {
        $Venues = $this->readVenues();
         
        if (count($Venues)<1) {
            return 0;
        }
         
        $count = 0;
        foreach ($Venues as $venue) {
            $count=$count+$venue;
        }
         
        return $count;
    }
 
    /*
     * save data to session
     */
    public function saveVenue($data) {
        return CakeSession::write('cart',$data);
    }
 
    /*
     * read cart data from session
     */
    public function readVenues() {
        return CakeSession::read('cart');
    }

    /**
     * Invoice method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function invoice($id=null)
    {
        

        $venue = $this->Venues->get($id, [
            'contain' => ['EventTypes', 'Events'],
        ]);

        $this->set(compact('venue'));

    }
 
}
