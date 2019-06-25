<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Model Entity
 *
 * @property int $id
 * @property int $manufacture_id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $state
 * @property int|null $user_created
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $user_modified
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Manufacturer $manufacturer
 */
class Model extends Entity
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
        'manufacture_id' => true,
        'name' => true,
        'description' => true,
        'state' => true,
        'user_created' => true,
        'created' => true,
        'user_modified' => true,
        'modified' => true,
        'manufacturer' => true
    ];
}
