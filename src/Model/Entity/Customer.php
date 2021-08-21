<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $customerID
 * @property string $customerFirstname
 * @property string $customerSecondname
 * @property string $customerEmail
 * @property string $customerPhone
 */
class Customer extends Entity
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
        'customerFirstname' => true,
        'customerSecondname' => true,
        'customerEmail' => true,
        'customerPhone' => true,
    ];
}