<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Address Entity
 *
 * @property int $address_id
 * @property string $ubigeo_id
 * @property string|null $type_road
 * @property int|null $user_created
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $user_modified
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Ubigeo $ubigeo
 */
class Address extends Entity
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
        'ubigeo_id' => true,
        'type_road' => true,
        'user_created' => true,
        'created' => true,
        'user_modified' => true,
        'modified' => true,
        'ubigeo' => true
    ];
}
