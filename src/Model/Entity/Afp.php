<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Afp Entity
 *
 * @property int $id
 * @property string|null $description
 * @property int|null $user_created
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $user_modified
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Dataafp[] $dataafps
 */
class Afp extends Entity
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
        'description' => true,
        'user_created' => false,
        'created' => false,
        'user_modified' => false,
        'modified' => false,
        'dataafps' => false
    ];
}
