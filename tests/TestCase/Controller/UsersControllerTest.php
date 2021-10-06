<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\UsersController Test Case
 *
 * @uses \App\Controller\UsersController
 */
class UsersControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Users',
<<<<<<< HEAD
=======
        'app.Events',
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
    ];

    /**
     * Test index method
     *
     * @return void
<<<<<<< HEAD
=======
     * @uses \App\Controller\UsersController::index()
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
<<<<<<< HEAD
=======
     * @uses \App\Controller\UsersController::view()
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
<<<<<<< HEAD
=======
     * @uses \App\Controller\UsersController::add()
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
<<<<<<< HEAD
=======
     * @uses \App\Controller\UsersController::edit()
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
<<<<<<< HEAD
=======
     * @uses \App\Controller\UsersController::delete()
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
