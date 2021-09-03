<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventTalentTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventTalentTable Test Case
 */
class EventTalentTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EventTalentTable
     */
    protected $EventTalent;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EventTalent',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('EventTalent') ? [] : ['className' => EventTalentTable::class];
        $this->EventTalent = $this->getTableLocator()->get('EventTalent', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EventTalent);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
