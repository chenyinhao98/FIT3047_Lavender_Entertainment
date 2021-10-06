<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventTypesTable Test Case
 */
class EventTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EventTypesTable
     */
    protected $EventTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EventTypes',
        'app.Events',
<<<<<<< HEAD
        'app.Venues',
        'app.Suppliers',
        'app.Talents',
=======
        'app.Suppliers',
        'app.Talents',
        'app.Venues',
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
        $config = $this->getTableLocator()->exists('EventTypes') ? [] : ['className' => EventTypesTable::class];
        $this->EventTypes = $this->getTableLocator()->get('EventTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EventTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EventTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
