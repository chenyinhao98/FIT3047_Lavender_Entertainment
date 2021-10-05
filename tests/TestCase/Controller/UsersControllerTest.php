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
>>>>>>> eb6a50b8b745668bb9d74b990b2d6f7f2ca19a59
    ];

    /**
     * Test index method
     *
     * @return void
<<<<<<< HEAD
=======
     * @uses \App\Controller\UsersController::index()
>>>>>>> eb6a50b8b745668bb9d74b990b2d6f7f2ca19a59
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
>>>>>>> eb6a50b8b745668bb9d74b990b2d6f7f2ca19a59
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
>>>>>>> eb6a50b8b745668bb9d74b990b2d6f7f2ca19a59
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
>>>>>>> eb6a50b8b745668bb9d74b990b2d6f7f2ca19a59
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
>>>>>>> eb6a50b8b745668bb9d74b990b2d6f7f2ca19a59
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
