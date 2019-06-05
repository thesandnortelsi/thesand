<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Persona Entity
 *
 * @property int $perId
 * @property string|null $perApePaterno
 * @property string|null $perApeMaterno
 * @property string|null $perNombres
 * @property string|null $perDocumento
 * @property string|null $perEmail
 * @property \Cake\I18n\FrozenDate|null $perFecNacimiento
 * @property string|null $perEstado
 * @property int|null $perUsrCrea
 * @property \Cake\I18n\FrozenTime|null $perFecCrea
 * @property int|null $perUsrModifica
 * @property \Cake\I18n\FrozenTime|null $perFecModifica
 * @property int $tdiId
 * @property string|null $personacol
 * @property string|null $personacol1
 * @property int $dirId
 */
class Persona extends Entity
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
        'perApePaterno' => true,
        'perApeMaterno' => true,
        'perNombres' => true,
        'perDocumento' => true,
        'perEmail' => true,
        'perFecNacimiento' => true,
        'perEstado' => true,
        'perUsrCrea' => true,
        'perFecCrea' => true,
        'perUsrModifica' => true,
        'perFecModifica' => true,
        'tdiId' => true,
            ];
}
