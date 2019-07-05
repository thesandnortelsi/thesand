<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DatehorometersMachine Entity
 *
 * @property int $id
 * @property int $datehorometer_id
 * @property int $machines_id
 * @property float|null $day
 * @property float|null $night
 *
 * @property \App\Model\Entity\Datehorometer $datehorometer
 * @property \App\Model\Entity\Machine $machine
 */
class DatehorometersMachine extends Entity
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
        'datehorometer_id' => true,
        'machines_id' => true,
        'day' => true,
        'night' => true,
        'datehorometer' => true,
        'machine' => true
    ];
}
