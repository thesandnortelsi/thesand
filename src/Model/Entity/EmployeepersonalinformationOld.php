<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employeepersonalinformation Entity
 *
 * @property int $id
 * @property string|null $surname_father
 * @property string|null $surname_mother
 * @property string|null $name
 * @property int $documenttype_id
 * @property string|null $document
 * @property string|null $email
 * @property \Cake\I18n\FrozenDate|null $birthdate
 * @property string|null $gender
 * @property string|null $state
 * @property int|null $user_created
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $user_modified
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $ubigeo_id
 * @property int $nationality_id
 * @property int $sendingcountry_id
 * @property int $streettype_id
 * @property int $zonetype_id
 * @property string|null $phone
 * @property string|null $street_name
 * @property string|null $street_number
 * @property string|null $department
 * @property string|null $inside
 * @property string|null $mz
 * @property string|null $lot
 * @property string|null $kilometer
 * @property string|null $block
 * @property string|null $stage
 * @property string|null $zone_name
 * @property string|null $reference
 * @property string|null $place_birth
 *
 * @property \App\Model\Entity\Documenttype $documenttype
 * @property \App\Model\Entity\Ubigeo $ubigeo
 * @property \App\Model\Entity\Nationality $nationality
 * @property \App\Model\Entity\Sendingcountry $sendingcountry
 * @property \App\Model\Entity\Streettype $streettype
 * @property \App\Model\Entity\Zonetype $zonetype
 */
class Employeepersonalinformation extends Entity
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
        'surname_father' => true,
        'surname_mother' => true,
        'name' => true,
        'documenttype_id' => true,
        'document' => true,
        'email' => true,
        'birthdate' => true,
        'gender' => true,
        'state' => true,
        'user_created' => true,
        'created' => true,
        'user_modified' => true,
        'modified' => true,
        'nationality_id' => true,
        'sendingcountry_id' => true,
        'streettype_id' => true,
        'zonetype_id' => true,
        'phone' => true,
        'street_name' => true,
        'street_number' => true,
        'department' => true,
        'inside' => true,
        'mz' => true,
        'lot' => true,
        'kilometer' => true,
        'block' => true,
        'stage' => true,
        'zone_name' => true,
        'reference' => true,
        'place_birth' => true,
        'documenttype' => true,
        'ubigeo' => true,
        'nationality' => true,
        'sendingcountry' => true,
        'streettype' => true,
        'zonetype' => true,
        'geographicallocation_id' => true
    ];
}
