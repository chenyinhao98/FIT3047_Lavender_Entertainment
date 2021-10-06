<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TalentAvailability Entity
 *
 * @property int $id
 * @property int $talent_id
 * @property \Cake\I18n\FrozenDate $date
 * @property string $description
 * @property bool $avaliable
 *
 * @property \App\Model\Entity\Talent $talent
 */
class TalentAvailability extends Entity
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
        'talent_id' => true,
        'date' => true,
        'description' => true,
        'avaliable' => true,
        'talent' => true,
    ];
}
