<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SupplierSuburb Entity
 *
 * @property int $id
 * @property int $supplier_id
 * @property string $suburb_name
 *
 * @property \App\Model\Entity\Supplier $supplier
 */
class SupplierSuburb extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'supplier_id' => true,
        'suburb_name' => true,
        'supplier' => true,
    ];
}
