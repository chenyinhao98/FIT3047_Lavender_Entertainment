<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AboutUsCmsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AboutUsCmsTable Test Case
 */
class AboutUsCmsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AboutUsCmsTable
     */
    protected $AboutUsCms;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.AboutUsCms',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AboutUsCms') ? [] : ['className' => AboutUsCmsTable::class];
        $this->AboutUsCms = $this->getTableLocator()->get('AboutUsCms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AboutUsCms);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AboutUsCmsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
