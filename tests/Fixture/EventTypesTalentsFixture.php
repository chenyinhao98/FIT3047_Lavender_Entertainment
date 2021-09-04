<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventTypesTalentsFixture
 */
class EventTypesTalentsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'talent_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'event_type_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'talents_event_types_talents_id' => ['type' => 'index', 'columns' => ['talent_id'], 'length' => []],
            'event_types_talents_event_type_id' => ['type' => 'index', 'columns' => ['event_type_id'], 'length' => []],
        ],
        '_constraints' => [
            'talents_event_types_talents_id' => ['type' => 'foreign', 'columns' => ['talent_id'], 'references' => ['talents', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'event_types_talents_event_type_id' => ['type' => 'foreign', 'columns' => ['event_type_id'], 'references' => ['event_types', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'talent_id' => 1,
                'event_type_id' => 1,
            ],
        ];
        parent::init();
    }
}
