<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ubigeo Entity
 *
 * @property string $ubigeo_id
 * @property string $disId
 * @property string|null $populated_center
 */
class Ubigeo extends Entity
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
        'disId' => true,
        'populated_center' => true
    ];
}
