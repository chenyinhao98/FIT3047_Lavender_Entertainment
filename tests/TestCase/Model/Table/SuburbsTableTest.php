<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SuburbsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SuburbsTable Test Case
 */
class SuburbsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SuburbsTable
     */
    protected $Suburbs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Suburbs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Suburbs') ? [] : ['className' => SuburbsTable::class];
        $this->Suburbs = $this->getTableLocator()->get('Suburbs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Suburbs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SuburbsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
