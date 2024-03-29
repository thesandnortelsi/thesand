<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Datehorometer Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $date
 * @property int|null $user_created
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $user_modified
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Machine[] $machines
 */
class Datehorometer extends Entity
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
        'date' => true,
        'user_created' => true,
        'created' => true,
        'user_modified' => true,
        'modified' => true,
        'machines' => true
    ];
}
