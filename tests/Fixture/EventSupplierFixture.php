<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventSupplierFixture
 */
class EventSupplierFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'event_supplier';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'eventID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'supplierID' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'event_supplier_eventID' => ['type' => 'index', 'columns' => ['eventID'], 'length' => []],
            'event_supplier_supplierID' => ['type' => 'index', 'columns' => ['supplierID'], 'length' => []],
        ],
        '_constraints' => [
            'event_supplier_supplierID' => ['type' => 'foreign', 'columns' => ['supplierID'], 'references' => ['suppliers', 'supplierID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'event_supplier_eventID' => ['type' => 'foreign', 'columns' => ['eventID'], 'references' => ['events', 'eventID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'supplierID' => 1,
            ],
        ];
        parent::init();
    }
}
