<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Corrective Entity
 *
 * @property int $int
 * @property int $machine_id
 * @property string|null $name
 * @property string|null $description
 * @property \Cake\I18n\FrozenDate|null $date
 * @property string|null $year
 * @property string|null $month
 * @property string|null $day
 * @property int|null $user_created
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $user_modified
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Machine $machine
 */
class Corrective extends Entity
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
        'machine_id' => true,
        'name' => true,
        'description' => true,
        'date' => true,
        'year' => true,
        'month' => true,
        'day' => true,
        'user_created' => true,
        'created' => true,
        'user_modified' => true,
        'modified' => true,
        'machine' => true
    ];
}
