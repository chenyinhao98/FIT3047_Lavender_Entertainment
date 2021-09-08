<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventsTalentsFixture
 */
class EventsTalentsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'event_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'talent_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'event_talent_event_id' => ['type' => 'index', 'columns' => ['event_id'], 'length' => []],
            'event_talent_talent_id' => ['type' => 'index', 'columns' => ['talent_id'], 'length' => []],
        ],
        '_constraints' => [
            'event_talent_talent_id' => ['type' => 'foreign', 'columns' => ['talent_id'], 'references' => ['talents', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'event_talent_event_id' => ['type' => 'foreign', 'columns' => ['event_id'], 'references' => ['events', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'event_id' => 1,
                'talent_id' => 1,
            ],
        ];
        parent::init();
    }
}
