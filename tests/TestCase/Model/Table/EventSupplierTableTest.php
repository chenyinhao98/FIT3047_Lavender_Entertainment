<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventSupplierTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventSupplierTable Test Case
 */
class EventSupplierTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EventSupplierTable
     */
    protected $EventSupplier;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EventSupplier',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('EventSupplier') ? [] : ['className' => EventSupplierTable::class];
        $this->EventSupplier = $this->getTableLocator()->get('EventSupplier', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EventSupplier);

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
