<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * VenueAvailability Controller
 *
 * @property \App\Model\Table\VenueAvailabilityTable $VenueAvailability
 * @method \App\Model\Entity\VenueAvailability[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VenueAvailabilityController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Venues'],
        ];
        $venueAvailability = $this->paginate($this->VenueAvailability);

        $this->set(compact('venueAvailability'));
    }

    /**
     * View method
     *
     * @param string|null $id Venue Availability id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $venueAvailability = $this->VenueAvailability->get($id, [
            'contain' => ['Venues'],
        ]);

        $this->set(compact('venueAvailability'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $venueAvailability = $this->VenueAvailability->newEmptyEntity();
        if ($this->request->is('post')) {
            $venueAvailability = $this->VenueAvailability->patchEntity($venueAvailability, $this->request->getData());
            if ($this->VenueAvailability->save($venueAvailability)) {
                $this->Flash->success(__('The venue availability has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The venue availability could not be saved. Please, try again.'));
        }
        $venues = $this->VenueAvailability->Venues->find('list', ['limit' => 200]);
        $this->set(compact('venueAvailability', 'venues'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Venue Availability id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $venueAvailability = $this->VenueAvailability->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $venueAvailability = $this->VenueAvailability->patchEntity($venueAvailability, $this->request->getData());
            if ($this->VenueAvailability->save($venueAvailability)) {
                $this->Flash->success(__('The venue availability has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The venue availability could not be saved. Please, try again.'));
        }
        $venues = $this->VenueAvailability->Venues->find('list', ['limit' => 200]);
        $this->set(compact('venueAvailability', 'venues'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Venue Availability id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $venueAvailability = $this->VenueAvailability->get($id);
        if ($this->VenueAvailability->delete($venueAvailability)) {
            $this->Flash->success(__('The venue availability has been deleted.'));
        } else {
            $this->Flash->error(__('The venue availability could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
