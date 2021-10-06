<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactUsCmsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactUsCmsTable Test Case
 */
class ContactUsCmsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactUsCmsTable
     */
    protected $ContactUsCms;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ContactUsCms',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ContactUsCms') ? [] : ['className' => ContactUsCmsTable::class];
        $this->ContactUsCms = $this->getTableLocator()->get('ContactUsCms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ContactUsCms);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ContactUsCmsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
