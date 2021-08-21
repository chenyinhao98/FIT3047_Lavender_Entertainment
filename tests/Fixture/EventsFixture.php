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
        'eventID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'customerID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'venueID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'eventAttendance' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'eventDate' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'eventType' => ['type' => 'string', 'length' => 256, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'eventStartTime' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'eventEndTime' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'paymentID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'event_venue_venueID' => ['type' => 'index', 'columns' => ['venueID'], 'length' => []],
            'event_payment_paymentID' => ['type' => 'index', 'columns' => ['paymentID'], 'length' => []],
            'event_customer_customerID' => ['type' => 'index', 'columns' => ['customerID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['eventID'], 'length' => []],
            'event_venue_venueID' => ['type' => 'foreign', 'columns' => ['venueID'], 'references' => ['venues', 'venueID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'event_payment_paymentID' => ['type' => 'foreign', 'columns' => ['paymentID'], 'references' => ['payments', 'paymentID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'event_customer_customerID' => ['type' => 'foreign', 'columns' => ['customerID'], 'references' => ['customers', 'customerID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'customerID' => 1,
                'venueID' => 1,
                'eventAttendance' => 1,
                'eventDate' => 1,
                'eventType' => 'Lorem ipsum dolor sit amet',
                'eventStartTime' => '2021-08-21 14:02:37',
                'eventEndTime' => '2021-08-21 14:02:37',
                'paymentID' => 1,
            ],
        ];
        parent::init();
    }
}
