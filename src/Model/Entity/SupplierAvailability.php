<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SupplierAvailability Entity
 *
 * @property int $id
 * @property int $supplier_id
 * @property \Cake\I18n\FrozenDate $date
 * @property string $description
 * @property bool $avaliable
 *
 * @property \App\Model\Entity\Supplier $supplier
 */
class SupplierAvailability extends Entity
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
        'date' => true,
        'description' => true,
        'avaliable' => true,
        'supplier' => true,
    ];
}
