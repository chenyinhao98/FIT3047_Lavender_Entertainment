<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AboutUsCm Entity
 *
 * @property int $id
 * @property string $first_section_header_1
 * @property string $first_section_body_1
 * @property string $first_section_photo_1
 * @property string $first_section_header_2
 * @property string $first_section_body_2
 * @property string $first_section_photo_2
 * @property string $first_section_header_3
 * @property string $first_section_body_3
 * @property string $first_section_photo_3
 * @property string $what_we_offer_photo
 * @property string $what_we_offer_body
 * @property string $what_we_offer_dot_1
 * @property string $what_we_offer_dot_2
 * @property string $what_we_offer_dot_3
 * @property string $what_we_offer_dot_4
 * @property string $what_we_offer_dot_5
 * @property string $what_we_offer_dot_6
 * @property string $what_we_offer_dot_7
 * @property string $what_we_offer_dot_8
 * @property string $annoucement_heading
 * @property string $annoucment_body
 */
class AboutUsCm extends Entity
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
        'first_section_header_1' => true,
        'first_section_body_1' => true,
        'first_section_photo_1' => true,
        'first_section_header_2' => true,
        'first_section_body_2' => true,
        'first_section_photo_2' => true,
        'first_section_header_3' => true,
        'first_section_body_3' => true,
        'first_section_photo_3' => true,
        'what_we_offer_photo' => true,
        'what_we_offer_body' => true,
        'what_we_offer_dot_1' => true,
        'what_we_offer_dot_2' => true,
        'what_we_offer_dot_3' => true,
        'what_we_offer_dot_4' => true,
        'what_we_offer_dot_5' => true,
        'what_we_offer_dot_6' => true,
        'what_we_offer_dot_7' => true,
        'what_we_offer_dot_8' => true,
        'annoucement_heading' => true,
        'annoucment_body' => true,
    ];
}
