<?php
declare(strict_types=1);

namespace App\Controller;


use Cake\Database\Expression\QueryExpression;
use Cake\ORM\Query;
use Cake\ORM\TableRegistry;
use App\Model\Entity\Venue;
use function React\Promise\all;


/**
 * Venues Controller
 *
 * @property \App\Model\Table\VenuesTable $Venues
 * @property \App\Model\Table\EventTypesTable $EventTypes

 * @property \App\Model\Table\VenueAvailabilityTable $VenueAvailability
 * @property \App\Model\Table\SuppliersTable $Suppliers
 * @property \App\Model\Table\TalentsTable $Talents
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
        //$searchEndDate = $this->getRequest()->getQuery('search_end_date');

        $numberArray = explode(',',$attendeeNumber);
        $priceArray = explode(',',$searchPrice);

        //find by event type
        $eventTypeIds = array();
            //$chooseEventType = $this->EventTypes->find()->where(['event_name' => $searchType])->first();
            $resultsEventType = $this->Venues->find()
                ->contain('EventTypes')
                ->extract('event_types');
            //echo $searchType;
            $eventTypeFound = false;
            foreach ($resultsEventType as $x){
                foreach ($x as $y){
                    //echo $y->_joinData;
                    //echo $y->event_name;
                    if ($y->event_name == $searchType){
                        array_push($eventTypeIds,$y->_joinData->venue_id);
                        $eventTypeFound = true;
                    }
                }
            }
            if (!$eventTypeFound) {
                $eventTypeIds = null;
            }

        //foreach ($eventTypeIds as $x){echo $x;}



        //find by date and other values
        if ($searchStartDate != null){
            //date format transmission
            $startDateArray = explode('/',$searchStartDate);
            $searchStartDate = $startDateArray[2] . '-' . $startDateArray[0] . '-' . $startDateArray[1];

            $invalidIds = array();
            foreach($venues as $venue) {
                $available = $this->VenueAvailability->find()
                    ->where(['venue_id' => $venue->id]) //Make this constant only for testing
                    ->andWhere(['date' => $searchStartDate])
                    ->andWhere(['avaliable' => 0]); //this is a Boolean entity
                if(empty($available->all()->first())){

                }
                else{
                    array_push($invalidIds,$venue->id);
                }
            }

            if (!empty($invalidIds)){
                if ($eventTypeIds != null){
                    $results = $this->Venues->find()
                        ->where(['venue_capacity >=' => $numberArray[0],'AND' => ['venue_capacity <=' => $numberArray[1]]])
                        ->andWhere(['venue_address LIKE' => '%' . $searchAddress . '%'])
                        ->andWhere(['venue_payrate >=' => $priceArray[0],'AND' => ['venue_payrate <=' => $priceArray[1]]])
                        ->andwhere(['id NOT IN' => $invalidIds])
                        ->andwhere(['id IN' => $eventTypeIds]);
                    $invalidResults = $this->Venues->find()
                        ->where(['venue_capacity >=' => $numberArray[0],'AND' => ['venue_capacity <=' => $numberArray[1]]])
                        ->andWhere(['venue_address LIKE' => '%' . $searchAddress . '%'])
                        ->andWhere(['venue_payrate >=' => $priceArray[0],'AND' => ['venue_payrate <=' => $priceArray[1]]])
                        ->andwhere(['id IN' => $invalidIds])
                        ->andwhere(['id IN' => $eventTypeIds]);
                }
                else{
                    $results = $this->Venues->find()
                        ->where(['venue_capacity >=' => $numberArray[0],'AND' => ['venue_capacity <=' => $numberArray[1]]])
                        ->andWhere(['venue_address LIKE' => '%' . $searchAddress . '%'])
                        ->andWhere(['venue_payrate >=' => $priceArray[0],'AND' => ['venue_payrate <=' => $priceArray[1]]])
                        ->andwhere(['id NOT IN' => $invalidIds]);
                    $invalidResults = $this->Venues->find()
                        ->where(['venue_capacity >=' => $numberArray[0],'AND' => ['venue_capacity <=' => $numberArray[1]]])
                        ->andWhere(['venue_address LIKE' => '%' . $searchAddress . '%'])
                        ->andWhere(['venue_payrate >=' => $priceArray[0],'AND' => ['venue_payrate <=' => $priceArray[1]]])
                        ->andwhere(['id IN' => $invalidIds]);
                }

            }
            else{
                if ($eventTypeIds != null){
                    $results = $this->Venues->find()
                        ->where(['venue_capacity >=' => $numberArray[0],'AND' => ['venue_capacity <=' => $numberArray[1]]])
                        ->andWhere(['venue_address LIKE' => '%' . $searchAddress . '%'])
                        ->andWhere(['venue_payrate >=' => $priceArray[0],'AND' => ['venue_payrate <=' => $priceArray[1]]])
                        ->andwhere(['id IN' => $eventTypeIds]);
                }
                else{
                    $results = $this->Venues->find()
                        ->where(['venue_capacity >=' => $numberArray[0],'AND' => ['venue_capacity <=' => $numberArray[1]]])
                        ->andWhere(['venue_address LIKE' => '%' . $searchAddress . '%'])
                        ->andWhere(['venue_payrate >=' => $priceArray[0],'AND' => ['venue_payrate <=' => $priceArray[1]]]);
                }
                $invalidResults = null;
            }

        }
        else{
            if ($eventTypeIds != null){
                $results = $this->Venues->find()
                    ->where(['venue_capacity >=' => $numberArray[0],'AND' => ['venue_capacity <=' => $numberArray[1]]])
                    ->andWhere(['venue_address LIKE' => '%' . $searchAddress . '%'])
                    ->andWhere(['venue_payrate >=' => $priceArray[0],'AND' => ['venue_payrate <=' => $priceArray[1]]])
                    ->andwhere(['id IN' => $eventTypeIds]);
            }
            else{
                $results = $this->Venues->find()
                    ->where(['venue_capacity >=' => $numberArray[0],'AND' => ['venue_capacity <=' => $numberArray[1]]])
                    ->andWhere(['venue_address LIKE' => '%' . $searchAddress . '%'])
                    ->andWhere(['venue_payrate >=' => $priceArray[0],'AND' => ['venue_payrate <=' => $priceArray[1]]]);
            }
            $invalidResults = null;
        }

        /*
        if ($searchEndDate != '') {
            $endDateArray = explode('/',$searchEndDate);
            $searchEndDate = $endDateArray[2] . '-' . $endDateArray[0] . '-' . $endDateArray[1];
        }
        */

        $this->set(compact('venues','results','invalidResults','searchStartDate'));
    }

    public function individual($id=null)
    {
        $venue = $this->Venues->get($id, [
            'contain' => ['EventTypes', 'Events','VenueAvailability'],
        ]);

        //Get EventType
        $venueEventTypes = $venue->event_types;
        $venueEventTypesIds = array();
        foreach($venueEventTypes as $x){
            array_push($venueEventTypesIds,$x->id);
        }

        //foreach ($venueEventTypesIds as $x){echo $x;}

        $this->loadModel('Suppliers');
        $this->loadModel('Talents');

        //Supplier Recommendation
        $supplierEventTypes = $this->Suppliers->find()
            ->contain('EventTypes')
            ->extract('event_types');
        $supplierResultsIds = array();
        foreach ($supplierEventTypes as $x){
            foreach($x as $y){
                //echo $y;
                if(in_array($y->id,$venueEventTypesIds)){
                    if (!in_array($y->_joinData->supplier_id,$supplierResultsIds)){
                            array_push($supplierResultsIds,$y->_joinData->supplier_id);
                    }
                }
            }
        }
        if (!empty($supplierResultsIds)){
            $supplierResults = $this->Suppliers->find()
                ->where(['id IN' => $supplierResultsIds]);
        }
        else{
            $supplierResults = null;
        }


        //Talent Recommendation
        $talentEventTypes = $this->Talents->find()
            ->contain('EventTypes')
            ->extract('event_types');

            $talentResultsIds = array();
            foreach ($talentEventTypes as $x) {
                foreach ($x as $y) {
                    //echo $y;
                    if (in_array($y->id, $venueEventTypesIds)) {
                        if (!in_array($y->_joinData->talent_id, $talentResultsIds)) {
                            array_push($talentResultsIds, $y->_joinData->talent_id);
                        }

                    }
                }
            }
        if (!empty($talentResultsIds)) {
            $talentResults = $this->Talents->find()
                ->where(['id IN' => $talentResultsIds]);
        }
        else{
            $talentResults = null;
        }

        $this->set(compact('venue','talentResults','supplierResults'));
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

    public function display(string ...$path): ?Response
    {
        if (!$path) {
            return $this->redirect('/');}
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();}
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }}


    /**
     * Cart method
     *
     * @param string|null $id Venue id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
/**
 * Cart method
 *
 * @param string|null $id Venue id.
 * @return \Cake\Http\Response|null|void Renders view
 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
 */

    public function cart($id=null) {
    $venue = $this->Venues->get($id, [
        'contain' => ['EventTypes', 'Events'],
    ]);

    $guestNumber = $this->getRequest()->getQuery('guest_count');
    $payrate= $venue->venue_payrate;


    if(isset($_GET['update'])) { //Use $_GET if it's a GET request
        //Save the values in variable
        $guestcount = $_GET['guest-count'];
        $rate = $_GET['venue_payrate'];

        //Calculate here
        $total = $guestcount * $rate;

    }
    $this->set(compact('venue'));

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
        //this part of code is for availability
        /*
        $this->loadModel('VenueAvailability');

        $venueAvailability = $this->VenueAvailability->newEmptyEntity();
        if ($this->request->is('post')) {
            $venueAvailability = $this->Venues->patchEntity($venueAvailability, $this->request->getData());
            if ($this->VenueAvailability->save($venueAvailability)) {
                $this->Flash->success(__('The venue has been saved.'));
            }
            $this->Flash->error(__('The venue could not be saved. Please, try again.'));
        }

        */

        //this part of code is for availability

        $venue = $this->Venues->get($id, [
            'contain' => ['EventTypes', 'Events'],
        ]);

        $this->set(compact('venue'));

    }
}
