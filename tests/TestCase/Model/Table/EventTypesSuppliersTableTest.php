<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventTypesSuppliersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventTypesSuppliersTable Test Case
 */
class EventTypesSuppliersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EventTypesSuppliersTable
     */
    protected $EventTypesSuppliers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EventTypesSuppliers',
        'app.Suppliers',
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
        $config = $this->getTableLocator()->exists('EventTypesSuppliers') ? [] : ['className' => EventTypesSuppliersTable::class];
        $this->EventTypesSuppliers = $this->getTableLocator()->get('EventTypesSuppliers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EventTypesSuppliers);

        parent::tearDown();
    }

    /**
<<<<<<< HEAD
=======
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EventTypesSuppliersTable::validationDefault()
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
     * @uses \App\Model\Table\EventTypesSuppliersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
