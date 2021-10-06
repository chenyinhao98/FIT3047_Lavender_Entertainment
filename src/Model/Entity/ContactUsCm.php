<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ContactUsCm Entity
 *
 * @property int $id
<<<<<<< HEAD
 * @property string $header_1
 * @property string $body_1
=======
 * @property string $header
 * @property string $body
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
 */
class ContactUsCm extends Entity
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
<<<<<<< HEAD
        'header_1' => true,
        'body_1' => true,
=======
        'header' => true,
        'body' => true,
>>>>>>> 4b6099aa45aecc823ccd8a1102c7616d7170fb98
    ];
}
