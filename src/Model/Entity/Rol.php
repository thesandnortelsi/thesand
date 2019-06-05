<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Rol Entity
 *
 * @property int $rolId
 * @property string|null $rolDescripcion
 * @property string|null $rolEstado
 * @property int|null $rolUsrCrea
 * @property \Cake\I18n\FrozenTime|null $rolFecCrea
 * @property int|null $rolUsrModifica
 * @property \Cake\I18n\FrozenTime|null $rolFecModifica
 */
class Rol extends Entity
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
        'rolDescripcion' => true,
        'rolEstado' => true,
        'rolUsrCrea' => true,
        'rolFecCrea' => true,
        'rolUsrModifica' => true,
        'rolFecModifica' => true
    ];

    protected function _setRolFecCrea($value){
        $today = date("Y-m-d H:i:s");
        $value = $today;
        return $value;
    }
}
