<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventsSuppliersFixture
 */
class EventsSuppliersFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
<<<<<<< HEAD
        'event_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'supplier_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'event_supplier_event_id' => ['type' => 'index', 'columns' => ['event_id'], 'length' => []],
            'event_supplier_supplier_id' => ['type' => 'index', 'columns' => ['supplier_id'], 'length' => []],
        ],
        '_constraints' => [
            'event_supplier_supplier_id' => ['type' => 'foreign', 'columns' => ['supplier_id'], 'references' => ['suppliers', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'event_supplier_event_id' => ['type' => 'foreign', 'columns' => ['event_id'], 'references' => ['events', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
=======
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'event_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'supplier_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'event_supplier_eventID' => ['type' => 'index', 'columns' => ['event_id'], 'length' => []],
            'event_supplier_supplierID' => ['type' => 'index', 'columns' => ['supplier_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'event_supplier_supplierID' => ['type' => 'foreign', 'columns' => ['supplier_id'], 'references' => ['suppliers', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'event_supplier_eventID' => ['type' => 'foreign', 'columns' => ['event_id'], 'references' => ['events', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
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
<<<<<<< HEAD
=======
                'id' => 1,
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
                'event_id' => 1,
                'supplier_id' => 1,
            ],
        ];
        parent::init();
    }
}
