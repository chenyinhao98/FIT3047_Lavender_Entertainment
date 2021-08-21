<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Talent Entity
 *
 * @property int $talentID
 * @property string $talentCategory
 * @property string $talentName
 * @property string $talentPreferred
 * @property string $talentAddress
 * @property float $talentTravelRadius
 * @property string $talentPPH
 * @property float $talentMinHour
 * @property string $talentContactName
 * @property string $talentContactNumber
 * @property string $talentContactEmail
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
        'talentCategory' => true,
        'talentName' => true,
        'talentPreferred' => true,
        'talentAddress' => true,
        'talentTravelRadius' => true,
        'talentPPH' => true,
        'talentMinHour' => true,
        'talentContactName' => true,
        'talentContactNumber' => true,
        'talentContactEmail' => true,
    ];
}
