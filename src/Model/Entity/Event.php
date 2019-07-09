<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property int $machine_id
 * @property int $typeevent_id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $observation
 * @property int|null $operator
 * @property int|null $responsible
 * @property \Cake\I18n\FrozenDate|null $date
 * @property string|null $year
 * @property string|null $month
 * @property string|null $day
 * @property float|null $horometer_start
 * @property float|null $horometer_end
 * @property \Cake\I18n\FrozenTime|null $start
 * @property \Cake\I18n\FrozenTime|null $end
 * @property \Cake\I18n\FrozenTime|null $total
 * @property \Cake\I18n\FrozenDate|null $date_execution
 * @property string|null $year_executiom
 * @property string|null $month_execution
 * @property string|null $day_execution
 * @property string|null $state
 * @property int|null $user_created
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $user_modified
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Machine $machine
 * @property \App\Model\Entity\Typeevent $typeevent
 * @property \App\Model\Entity\Corrective[] $correctives
 */
class Event extends Entity
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
        'typeevent_id' => true,
        'name' => true,
        'description' => true,
        'observation' => true,
        'operator' => true,
        'responsible' => true,
        'date' => true,
        'year' => true,
        'month' => true,
        'day' => true,
        'horometer_start' => true,
        'horometer_end' => true,
        'start' => true,
        'end' => true,
        'total' => true,
        'date_execution' => true,
        'year_executiom' => true,
        'month_execution' => true,
        'day_execution' => true,
        'state' => true,
        'user_created' => true,
        'created' => true,
        'user_modified' => true,
        'modified' => true,
        'machine' => true,
        'typeevent' => true,
        'correctives' => true
    ];
}
