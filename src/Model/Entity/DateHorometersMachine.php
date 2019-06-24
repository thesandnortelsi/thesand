<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DateHorometersMachine Entity
 *
 * @property int $date_horometer_id
 * @property int $machine_id
 * @property float|null $day
 * @property float|null $night
 * @property float|null $last
 *
 * @property \App\Model\Entity\DateHorometer $date_horometer
 * @property \App\Model\Entity\Machine $machine
 */
class DateHorometersMachine extends Entity
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
        'day' => true,
        'night' => true,
        'last' => true,
        'date_horometer' => true,
        'machine' => true
    ];
}
