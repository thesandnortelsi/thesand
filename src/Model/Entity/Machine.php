<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Machine Entity
 *
 * @property int $id
 * @property int $area_id
 * @property int $model_id
 * @property int $group_id
 * @property int $frequency_id
 * @property string|null $code
 * @property string|null $name
 * @property string|null $description
 * @property string|null $series
 * @property string|null $plate
 * @property string|null $year
 * @property \Cake\I18n\FrozenDate|null $ispection
 * @property \Cake\I18n\FrozenDate|null $entry
 * @property float|null $horometer
 * @property float|null $horometer_mantenaice
 * @property int|null $position
 * @property \Cake\I18n\FrozenDate|null $date_mantenaice
 * @property float|null $factor
 * @property string|null $state
 * @property int|null $user_created
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $user_modified
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Area $area
 * @property \App\Model\Entity\Model $model
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\Frequency $frequency
 * @property \App\Model\Entity\Datehorometer[] $datehorometers
 */
class Machine extends Entity
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
        'area_id' => true,
        'model_id' => true,
        'group_id' => true,
        'frequency_id' => true,
        'code' => true,
        'name' => true,
        'description' => true,
        'series' => true,
        'plate' => true,
        'year' => true,
        'ispection' => true,
        'entry' => true,
        'horometer' => true,
        'horometer_mantenaice' => true,
        'position' => true,
        'date_mantenaice' => true,
        'factor' => true,
        'state' => true,
        'user_created' => true,
        'created' => true,
        'user_modified' => true,
        'modified' => true,
        'area' => true,
        'model' => true,
        'group' => true,
        'frequency' => true,
        'datehorometers' => true
    ];
}
