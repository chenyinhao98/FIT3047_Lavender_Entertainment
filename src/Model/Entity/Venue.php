<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venue Entity
 *
 * @property int $venueID
 * @property string $venueName
 * @property string $venueAddress
 * @property string $venueMiniCap
 * @property string $venuePreferred
 * @property string $venuePPH
 * @property float $venueMiniHour
 * @property string $venueContactName
 * @property string $venueContactNumber
 * @property string $venueContactEmail
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
        'venueName' => true,
        'venueAddress' => true,
        'venueMiniCap' => true,
        'venuePreferred' => true,
        'venuePPH' => true,
        'venueMiniHour' => true,
        'venueContactName' => true,
        'venueContactNumber' => true,
        'venueContactEmail' => true,
    ];
}
