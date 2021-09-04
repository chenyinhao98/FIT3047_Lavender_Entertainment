<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $event_name
 * @property int $customer_id
 * @property int $venue_id
 * @property int $event_attendance
 * @property int $event_date
 * @property int $event_type_id
 * @property \Cake\I18n\FrozenTime $event_startdate
 * @property \Cake\I18n\FrozenTime $event_enddate
 * @property int $payment_id
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Venue $venue
 * @property \App\Model\Entity\EventType $event_type
 * @property \App\Model\Entity\Payment $payment
 * @property \App\Model\Entity\Supplier[] $suppliers
 * @property \App\Model\Entity\Talent[] $talents
 */
class Event extends Entity
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
        'event_name' => true,
        'customer_id' => true,
        'venue_id' => true,
        'event_attendance' => true,
        'event_date' => true,
        'event_type_id' => true,
        'event_startdate' => true,
        'event_enddate' => true,
        'payment_id' => true,
        'customer' => true,
        'venue' => true,
        'event_type' => true,
        'payment' => true,
        'suppliers' => true,
        'talents' => true,
    ];
}
