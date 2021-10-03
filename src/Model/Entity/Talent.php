<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Talent Entity
 *
 * @property int $id
 * @property string $talent_type
 * @property string $talent_name
 * @property string $talent_address
 * @property float $talent_payrate
 * @property string $talent_contact_name
 * @property string $talent_contact_number
 * @property string $talent_email
 * @property string|null $talent_photo
 * @property string|null $talent_about_us
 *
 * @property \App\Model\Entity\TalentAvailability[] $talent_availability
 * @property \App\Model\Entity\TalentSuburb[] $talent_suburb
 * @property \App\Model\Entity\EventType[] $event_types
 * @property \App\Model\Entity\Event[] $events
 */
class Talent extends Entity
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
        'talent_type' => true,
        'talent_name' => true,
        'talent_address' => true,
        'talent_payrate' => true,
        'talent_contact_name' => true,
        'talent_contact_number' => true,
        'talent_email' => true,
        'talent_photo' => true,
        'talent_about_us' => true,
        'talent_availability' => true,
        'talent_suburb' => true,
        'event_types' => true,
        'events' => true,
    ];
}
