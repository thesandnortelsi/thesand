<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employeedataaditional Entity
 *
 * @property int $id
 * @property int $employeeworkinformation_id
 * @property int $documenttype_id
 * @property string|null $name
 * @property string|null $surname_father
 * @property string|null $surname_mother
 * @property string|null $documentnumber
 * @property int|null $status
 * @property int|null $children_school_age
 * @property int|null $family_burden
 * @property string|null $gender
 * @property string|null $relationship
 * @property int|null $user_created
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $user_modified
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Employeeworkinformation $employeeworkinformation
 */
class Employeedataaditional extends Entity
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
        'employeeworkinformation_id' => true,
        'documenttype_id' => true,
        'documenttype' => true,
        'name' => true,
        'surname_father' => true,
        'surname_mother' => true,
        'documentnumber' => true,
        'status' => true,
        'children_school_age' => true,
        'family_burden' => true,
        'gender' => true,
        'relationship' => true,
        'user_created' => true,
        'created' => true,
        'user_modified' => true,
        'modified' => true,
        'employeeworkinformation' => true
    ];
}
