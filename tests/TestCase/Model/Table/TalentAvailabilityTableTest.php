<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TalentAvailabilityTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TalentAvailabilityTable Test Case
 */
class TalentAvailabilityTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TalentAvailabilityTable
     */
    protected $TalentAvailability;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.TalentAvailability',
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
        $config = $this->getTableLocator()->exists('TalentAvailability') ? [] : ['className' => TalentAvailabilityTable::class];
        $this->TalentAvailability = $this->getTableLocator()->get('TalentAvailability', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TalentAvailability);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TalentAvailabilityTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TalentAvailabilityTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
