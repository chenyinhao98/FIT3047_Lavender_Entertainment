<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Supplier Entity
 *
 * @property int $supplierID
 * @property string $supplierCategory
 * @property string $supplierName
 * @property string $supplierPreferred
 * @property string $supplierAddress
 * @property float $supplierTravelRadius
 * @property string $supplierPPH
 * @property float $supplierMiniHour
 * @property string $supplierContactName
 * @property string $supplierContactNumber
 * @property string $supplierContactEmail
 */
class Supplier extends Entity
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
        'supplierCategory' => true,
        'supplierName' => true,
        'supplierPreferred' => true,
        'supplierAddress' => true,
        'supplierTravelRadius' => true,
        'supplierPPH' => true,
        'supplierMiniHour' => true,
        'supplierContactName' => true,
        'supplierContactNumber' => true,
        'supplierContactEmail' => true,
    ];
}
