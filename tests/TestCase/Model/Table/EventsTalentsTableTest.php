<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventsTalentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventsTalentsTable Test Case
 */
class EventsTalentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EventsTalentsTable
     */
    protected $EventsTalents;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EventsTalents',
        'app.Events',
        'app.Talents',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('EventsTalents') ? [] : ['className' => EventsTalentsTable::class];
        $this->EventsTalents = $this->getTableLocator()->get('EventsTalents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EventsTalents);

        parent::tearDown();
    }

    /**
<<<<<<< HEAD
=======
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EventsTalentsTable::validationDefault()
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
     * @uses \App\Model\Table\EventsTalentsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
