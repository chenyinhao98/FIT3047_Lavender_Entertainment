<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventTypesTalentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventTypesTalentsTable Test Case
 */
class EventTypesTalentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EventTypesTalentsTable
     */
    protected $EventTypesTalents;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EventTypesTalents',
        'app.Talents',
        'app.EventTypes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('EventTypesTalents') ? [] : ['className' => EventTypesTalentsTable::class];
        $this->EventTypesTalents = $this->getTableLocator()->get('EventTypesTalents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EventTypesTalents);

        parent::tearDown();
    }

    /**
<<<<<<< HEAD
=======
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EventTypesTalentsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\EventTypesTalentsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
