<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventTalentFixture
 */
class EventTalentFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'event_talent';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'eventID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'talentID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'event_talent_talentID' => ['type' => 'index', 'columns' => ['talentID'], 'length' => []],
            'event_talent_eventID' => ['type' => 'index', 'columns' => ['eventID'], 'length' => []],
        ],
        '_constraints' => [
            'event_talent_talentID' => ['type' => 'foreign', 'columns' => ['talentID'], 'references' => ['talents', 'talentID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'event_talent_eventID' => ['type' => 'foreign', 'columns' => ['eventID'], 'references' => ['events', 'eventID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'eventID' => 1,
                'talentID' => 1,
            ],
        ];
        parent::init();
    }
}
