<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EventTypesVenue Entity
 *
 * @property int $id
 * @property int $venue_id
 * @property int $event_type_id
 *
 * @property \App\Model\Entity\Venue $venue
 * @property \App\Model\Entity\EventType $event_type
 */
class EventTypesVenue extends Entity
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
        'venue_id' => true,
        'event_type_id' => true,
        'venue' => true,
        'event_type' => true,
    ];
}
