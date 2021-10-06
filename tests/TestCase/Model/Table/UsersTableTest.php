<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersTable Test Case
 */
class UsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersTable
     */
    protected $Users;

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
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Users') ? [] : ['className' => UsersTable::class];
        $this->Users = $this->getTableLocator()->get('Users', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Users);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
<<<<<<< HEAD
=======
     * @uses \App\Model\Table\UsersTable::validationDefault()
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
<<<<<<< HEAD
=======
     * @uses \App\Model\Table\UsersTable::buildRules()
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
