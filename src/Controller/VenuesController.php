<?php
declare(strict_types=1);

namespace App\Controller;


use Cake\Database\Expression\QueryExpression;
use Cake\ORM\Query;
use Cake\ORM\TableRegistry;
use App\Model\Entity\Venue;


/**
 * Venues Controller
 *
 * @property \App\Model\Table\VenuesTable $Venues
 * @property \App\Model\Table\EventTypesTable $EventTypes

 * @property \App\Model\Table\VenueAvailabilityTable $VenueAvailability
>>>>>>> origin/master
 * @method \App\Model\Entity\Venue[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VenuesController extends AppController
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
        $venues = $this->paginate($this->Venues);

        $this->set(compact('venues'));
    }

    public function home()
    {
        $this->loadModel('EventTypes');
        $types = $this->EventTypes->find();

        $venues = $this->paginate($this->Venues);

        $this->set(compact('venues','types'));
    }

    public function result()
    {
        $this->loadModel('EventTypes');
        $this->loadModel('VenueAvailability');

        $venues = $this->paginate($this->Venues);


        $searchAddress = $this->getRequest()->getQuery('search_name');
        $attendeeNumber = $this->getRequest()->getQuery('attendee_number');
        $searchPrice = $this->getRequest()->getQuery('venue_price');
        $searchType = $this->getRequest()->getQuery('venue_type');

        $searchStartDate = $this->getRequest()->getQuery('search_start_date');
        $searchEndDate = $this->getRequest()->getQuery('search_end_date');

        //date format transmission
        if ($searchStartDate != ''){
            $startDateArray = explode('/',$searchStartDate);
            $searchStartDate = $startDateArray[2] . '-' . $startDateArray[0] . '-' . $startDateArray[1];
        }

        if ($searchEndDate != '') {
            $endDateArray = explode('/',$searchEndDate);
            $searchEndDate = $endDateArray[2] . '-' . $endDateArray[0] . '-' . $endDateArray[1];
        }

        $numberArray = explode(',',$attendeeNumber);
        $priceArray = explode(',',$searchPrice);


        $invalidIds = array();
        foreach($venues as $venue) {
            $available = $this->VenueAvailability->find()
                ->where(['venue_id' => $venue->id]) //Make this constant only for testing
                ->andWhere(['date' => $searchStartDate])
                ->andWhere(['avaliable' => 0]); //this is a Boolean entity
            echo $available->all()->first();
            if(empty($available->all()->first())){

            }
            else{
                array_push($invalidIds,$venue->id);
            }
        }

        $results = $this->Venues->find()
            ->where(['venue_capacity >=' => $numberArray[0],'AND' => ['venue_capacity <' => $numberArray[1]]])
            ->andWhere(['venue_address LIKE' => '%' . $searchAddress . '%'])
            ->andWhere(['venue_payrate >=' => $priceArray[0],'AND' => ['venue_payrate <' => $priceArray[1]]])
            ->andwhere(['id NOT IN' => $invalidIds]);


        $this->set(compact('venues','results'));
    }

    public function individual($id=null)
    {

        $venue = $this->Venues->get($id, [
            'contain' => ['EventTypes', 'Events','VenueAvailability'],
        ]);

        $this->set(compact('venue'));

        $this->loadModel('Suppliers');
        $this->loadModel('Talents');


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
            'contain' => ['EventTypes', 'Events', 'VenueAvailability'],
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
