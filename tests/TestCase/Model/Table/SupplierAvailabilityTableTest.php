<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SupplierAvailabilityTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SupplierAvailabilityTable Test Case
 */
class SupplierAvailabilityTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SupplierAvailabilityTable
     */
    protected $SupplierAvailability;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.SupplierAvailability',
        'app.Suppliers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('SupplierAvailability') ? [] : ['className' => SupplierAvailabilityTable::class];
        $this->SupplierAvailability = $this->getTableLocator()->get('SupplierAvailability', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->SupplierAvailability);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SupplierAvailabilityTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SupplierAvailabilityTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
