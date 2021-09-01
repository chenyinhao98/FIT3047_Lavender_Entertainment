<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string $customer_firstname
 * @property string $customer_secondname
 * @property string $customer_email
 * @property string $customer_phone
 *
 * @property \App\Model\Entity\Event[] $events
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
        'customer_firstname' => true,
        'customer_secondname' => true,
        'customer_email' => true,
        'customer_phone' => true,
        'events' => true,
    ];
}