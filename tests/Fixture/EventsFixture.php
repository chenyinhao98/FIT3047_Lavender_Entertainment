<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventsFixture
 */
class EventsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'event_name' => ['type' => 'string', 'length' => 256, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'customer_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'venue_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'event_attendance' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'event_date' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'event_type_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'event_startdate' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'event_enddate' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'payment_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'event_event_type_id' => ['type' => 'index', 'columns' => ['event_type_id'], 'length' => []],
            'event_customer_customer_id' => ['type' => 'index', 'columns' => ['customer_id'], 'length' => []],
            'event_payment_payment_id' => ['type' => 'index', 'columns' => ['payment_id'], 'length' => []],
            'event_venue_venue_id' => ['type' => 'index', 'columns' => ['venue_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'event_event_type_id' => ['type' => 'foreign', 'columns' => ['event_type_id'], 'references' => ['event_types', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'event_customer_customer_id' => ['type' => 'foreign', 'columns' => ['customer_id'], 'references' => ['customers', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'event_venue_venue_id' => ['type' => 'foreign', 'columns' => ['venue_id'], 'references' => ['venues', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'event_payment_payment_id' => ['type' => 'foreign', 'columns' => ['payment_id'], 'references' => ['payments', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id' => 1,
                'event_name' => 'Lorem ipsum dolor sit amet',
                'customer_id' => 1,
                'venue_id' => 1,
                'event_attendance' => 1,
                'event_date' => 1,
                'event_type_id' => 1,
                'event_startdate' => '2021-08-30 09:10:08',
                'event_enddate' => '2021-08-30 09:10:08',
                'payment_id' => 1,
            ],
        ];
        parent::init();
    }
}
