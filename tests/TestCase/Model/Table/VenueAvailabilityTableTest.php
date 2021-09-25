<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VenueAvailabilityTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VenueAvailabilityTable Test Case
 */
class VenueAvailabilityTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VenueAvailabilityTable
     */
    protected $VenueAvailability;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.VenueAvailability',
        'app.Venues',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('VenueAvailability') ? [] : ['className' => VenueAvailabilityTable::class];
        $this->VenueAvailability = $this->getTableLocator()->get('VenueAvailability', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->VenueAvailability);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VenueAvailabilityTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\VenueAvailabilityTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
