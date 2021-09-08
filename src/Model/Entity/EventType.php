<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EventType Entity
 *
 * @property int $id
 * @property string $event_name
 *
 * @property \App\Model\Entity\Event[] $events
 * @property \App\Model\Entity\Venue[] $venues
 * @property \App\Model\Entity\Supplier[] $suppliers
 * @property \App\Model\Entity\Talent[] $talents
 */
class EventType extends Entity
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
        'events' => true,
        'venues' => true,
        'suppliers' => true,
        'talents' => true,
    ];
}
