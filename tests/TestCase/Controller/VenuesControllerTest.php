<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\VenuesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\VenuesController Test Case
 *
 * @uses \App\Controller\VenuesController
 */
class VenuesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Venues',
        'app.Events',
<<<<<<< HEAD
=======
        'app.VenueAvailability',
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
        'app.EventTypes',
        'app.EventTypesVenues',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\VenuesController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\VenuesController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\VenuesController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\VenuesController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\VenuesController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
