<?php
declare(strict_types=1);

namespace Venues\Controller;

/**
 * Carts Controller
 *
 * @property \App\Model\Table\VenuesTable $Venues
 * @method \App\Model\Entity\Venue[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */

 
class CartsController extends VenuesController {
 
    public $uses = array('Venues','VenuesController');
     
    public function addCart() {
        $this->autoRender = false;
        if ($this->request->is('post')) {
            $this->Cart->addVenue($this->request->data['VenuesController']['id']);
        }
        echo $this->Cart->getCount();
    }

    public function viewCart() {
        $Venues = $this->Cart->readVenue();
        
        if (null!=$carts) {
            foreach ($Venues as $id => $count) {
                $venue = $this->venue->read(null,$id);
                $venue['Venue']['count'] = $count;
                $Venues[]=$venue;
            }
        }
        $this->set(compact('$Venues'));
    }
}