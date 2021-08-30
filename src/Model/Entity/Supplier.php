<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Supplier Entity
 *
 * @property int $id
 * @property string $supplier_type
 * @property string $supplier_name
 * @property string $supplier_address
 * @property float $supplier_travel_radius
 * @property string $supplier_payrate
 * @property float $supplier_min_hour
 * @property float $supplier_advertise_fee
 * @property string $supplier_contact_name
 * @property string $supplier_contact_number
 * @property string $supplier_email
 * @property string|resource|null $supplier_photo
 * @property string|null $supplier_about_us
 *
 * @property \App\Model\Entity\EventType[] $event_types
 * @property \App\Model\Entity\Event[] $events
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
        'supplier_type' => true,
        'supplier_name' => true,
        'supplier_address' => true,
        'supplier_travel_radius' => true,
        'supplier_payrate' => true,
        'supplier_min_hour' => true,
        'supplier_advertise_fee' => true,
        'supplier_contact_name' => true,
        'supplier_contact_number' => true,
        'supplier_email' => true,
        'supplier_photo' => true,
        'supplier_about_us' => true,
        'event_types' => true,
        'events' => true,
    ];
}
