<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venue Entity
 *
 * @property int $id
 * @property string $venue_name
 * @property string $venue_address
 * @property int $venue_min_capacity
 * @property float $venue_payrate
 * @property float $venue_min_hour
 * @property string $venue_contact_name
 * @property string $venue_contact_number
 * @property string $venue_email
 * @property string|resource|null $venue_photo1
 * @property string|resource|null $venue_photo2
 * @property string|null $venue_about_us
 *
 * @property \App\Model\Entity\Event[] $events
 * @property \App\Model\Entity\EventType[] $event_types
 */
class Venue extends Entity
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
        'venue_name' => true,
        'venue_address' => true,
        'venue_min_capacity' => true,
        'venue_payrate' => true,
        'venue_min_hour' => true,
        'venue_contact_name' => true,
        'venue_contact_number' => true,
        'venue_email' => true,
        'venue_photo1' => true,
        'venue_photo2' => true,
        'venue_about_us' => true,
        'events' => true,
        'event_types' => true,
    ];
}
