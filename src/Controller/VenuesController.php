<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\TableRegistry;

/**
 * Venues Controller
 *
 * @property \App\Model\Table\VenuesTable $Venues
 * @property \App\Model\Table\EventTypesTable $EventTypes
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
        $this->loadModel('EventTypes');
        $types = $this->EventTypes->find();

        $venues = $this->paginate($this->Venues);

        $this->set(compact('venues','types'));
    }

    public function result()
    {
        $this->loadModel('');

        $venues = $this->paginate($this->Venues);
        $searchAddress = $this->getRequest()->getQuery('search_name');
        $attendeeNumber = $this->getRequest()->getQuery('attendee_number');
        $searchPrice = $this->getRequest()->getQuery('venue_price');
        $searchType = $this->getRequest()->getQuery('venue_type');


        $numberArray = explode(',',$attendeeNumber);
        $priceArray = explode(',',$searchPrice);
        $newQuery = $this->Venues->find()
            ->where(['venue_capacity >=' => $numberArray[0],'AND' => ['venue_capacity <' => $numberArray[1]]])
            ->andWhere(['venue_address LIKE' => '%' . $searchAddress . '%'])
            ->andWhere(['venue_payrate >=' => $priceArray[0],'AND' => ['venue_payrate <' => $priceArray[1]]]);

        //$x = 0;
        //while($x < $newQuery.count()) {
        //    $type = $this->Venues->EventTypes->find()->matching('Venues',function(\cake\ORM\Query $query) use ($newQuery){

        //    })
        //        ->where(['venue']);
        //    $x++;
        //}
        $this->set(compact('venues','newQuery'));
    }

    public function individual($id=null)
    {
        $venue = $this->Venues->get($id, [
            'contain' => ['EventTypes', 'Events','VenueAvailability'],
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
