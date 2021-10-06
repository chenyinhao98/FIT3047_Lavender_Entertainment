<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventsSuppliersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventsSuppliersTable Test Case
 */
class EventsSuppliersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EventsSuppliersTable
     */
    protected $EventsSuppliers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EventsSuppliers',
        'app.Events',
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
        $config = $this->getTableLocator()->exists('EventsSuppliers') ? [] : ['className' => EventsSuppliersTable::class];
        $this->EventsSuppliers = $this->getTableLocator()->get('EventsSuppliers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EventsSuppliers);

        parent::tearDown();
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\EventsSuppliersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
