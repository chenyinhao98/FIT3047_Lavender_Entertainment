<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SupplierSuburbTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SupplierSuburbTable Test Case
 */
class SupplierSuburbTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SupplierSuburbTable
     */
    protected $SupplierSuburb;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.SupplierSuburb',
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
        $config = $this->getTableLocator()->exists('SupplierSuburb') ? [] : ['className' => SupplierSuburbTable::class];
        $this->SupplierSuburb = $this->getTableLocator()->get('SupplierSuburb', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->SupplierSuburb);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SupplierSuburbTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SupplierSuburbTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
