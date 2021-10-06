<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventTypesSuppliersFixture
 */
class EventTypesSuppliersFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
<<<<<<< HEAD
=======
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
        'supplier_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'event_type_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'suppliers_event_types_supplier_id' => ['type' => 'index', 'columns' => ['supplier_id'], 'length' => []],
            'event_types_suppliers_event_type_id' => ['type' => 'index', 'columns' => ['event_type_id'], 'length' => []],
        ],
        '_constraints' => [
<<<<<<< HEAD
            'suppliers_event_types_supplier_id' => ['type' => 'foreign', 'columns' => ['supplier_id'], 'references' => ['suppliers', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'event_types_suppliers_event_type_id' => ['type' => 'foreign', 'columns' => ['event_type_id'], 'references' => ['event_types', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
=======
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'event_type_supplier_supplier_id' => ['type' => 'foreign', 'columns' => ['supplier_id'], 'references' => ['suppliers', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'event_type_supplier_event_type_id' => ['type' => 'foreign', 'columns' => ['event_type_id'], 'references' => ['event_types', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'supplier_id' => 1,
                'event_type_id' => 1,
            ],
        ];
        parent::init();
    }
}
