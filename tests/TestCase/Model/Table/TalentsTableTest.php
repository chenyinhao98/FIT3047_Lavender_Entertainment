<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TalentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TalentsTable Test Case
 */
class TalentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TalentsTable
     */
    protected $Talents;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Talents',
<<<<<<< HEAD
=======
        'app.TalentAvailability',
        'app.TalentSuburb',
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
        'app.EventTypes',
        'app.Events',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Talents') ? [] : ['className' => TalentsTable::class];
        $this->Talents = $this->getTableLocator()->get('Talents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Talents);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TalentsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
