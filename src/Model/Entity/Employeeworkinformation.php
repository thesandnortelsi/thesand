<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employeeworkinformation Entity
 *
 * @property int $id
 * @property int $laborregime_id
 * @property int $educationalsituation_id
 * @property int $activity_id
 * @property int|null $disability
 * @property string|null $cuspp
 * @property int|null $sctr_pension
 * @property int $contracttype_id
 * @property int|null $alternative_regime
 * @property int|null $maximum_day
 * @property int|null $night_time
 * @property int|null $is_unionized
 * @property int $periodicityremuneration_id
 * @property float|null $basic_remuneration_728
 * @property int $situation_id
 * @property int|null $income_exonerated_5ta
 * @property int $specialsituation_id
 * @property int $paymenttype_id
 * @property int $occupationalcategory_id
 * @property int $doublepayagreement_id
 * @property int $payrolltype_id
 * @property \Cake\I18n\FrozenDate|null $admission_date
 * @property int|null $state
 * @property \Cake\I18n\FrozenDate|null $liquidation_date
 * @property string|null $liquidation_reason
 * @property int|null $user_created
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $user_modified
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $proyect_id
 * @property int $employeetype_id
 * @property int $position_id
 * @property int $task_id
 * @property int $area_id
 * @property int $speciality_id
 * @property int $employeepersonalinformation_id
 * @property string $ruc
 *
 * @property \App\Model\Entity\Laborregime $laborregime
 * @property \App\Model\Entity\Educationalsituation $educationalsituation
 * @property \App\Model\Entity\Activity $activity
 * @property \App\Model\Entity\Contracttype $contracttype
 * @property \App\Model\Entity\Periodicityremuneration $periodicityremuneration
 * @property \App\Model\Entity\Situation $situation
 * @property \App\Model\Entity\Specialsituation $specialsituation
 * @property \App\Model\Entity\Paymenttype $paymenttype
 * @property \App\Model\Entity\Occupationalcategory $occupationalcategory
 * @property \App\Model\Entity\Doublepayagreement $doublepayagreement
 * @property \App\Model\Entity\Payrolltype $payrolltype
 * @property \App\Model\Entity\Proyect $proyect
 * @property \App\Model\Entity\Employeetype $employeetype
 * @property \App\Model\Entity\Position $position
 * @property \App\Model\Entity\Task $task
 * @property \App\Model\Entity\Area $area
 * @property \App\Model\Entity\Speciality $speciality
 * @property \App\Model\Entity\Employeepersonalinformation $employeepersonalinformation
 * @property \App\Model\Entity\Dataafp[] $dataafps
 * @property \App\Model\Entity\Databank[] $databanks
 * @property \App\Model\Entity\Payrolldetail[] $payrolldetails
 * @property \App\Model\Entity\Residencecontrol[] $residencecontrols
 */
class Employeeworkinformation extends Entity
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
        'laborregime_id' => true,
        'educationalsituation_id' => true,
        'activity_id' => true,
        'disability' => true,
        'cuspp' => true,
        'sctr_pension' => true,
        'contracttype_id' => true,
        'alternative_regime' => true,
        'maximum_day' => true,
        'night_time' => true,
        'is_unionized' => true,
        'periodicityremuneration_id' => true,
        'basic_remuneration_728' => true,
        'situation_id' => true,
        'income_exonerated_5ta' => true,
        'specialsituation_id' => true,
        'paymenttype_id' => true,
        'occupationalcategory_id' => true,
        'doublepayagreement_id' => true,
        'payrolltype_id' => true,
        'admission_date' => true,
        'state' => true,
        'liquidation_date' => true,
        'liquidation_reason' => true,
        'user_created' => true,
        'created' => true,
        'user_modified' => true,
        'modified' => true,
        'proyect_id' => true,
        'employeetype_id' => true,
        'position_id' => true,
        'task_id' => true,
        'area_id' => true,
        'speciality_id' => true,
        'employeepersonalinformation_id' => true,
        'ruc' => true,
        'laborregime' => true,
        'educationalsituation' => true,
        'activity' => true,
        'contracttype' => true,
        'periodicityremuneration' => true,
        'situation' => true,
        'specialsituation' => true,
        'paymenttype' => true,
        'occupationalcategory' => true,
        'doublepayagreement' => true,
        'payrolltype' => true,
        'proyect' => true,
        'employeetype' => true,
        'position' => true,
        'task' => true,
        'area' => true,
        'speciality' => true,
        'employeepersonalinformation' => true,
        'dataafps' => true,
        'databanks' => true,
        'payrolldetails' => true,
        'residencecontrols' => true
    ];


    // protected function _getFullName()
    // {
    //     return $this->first_name . '  ' . $this->last_name;
    // }
    
}
