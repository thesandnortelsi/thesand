<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Person Entity
 *
 * @property int $person_id
 * @property int|null $identification_document_id
 * @property int|null $address_id
 * @property string|null $surname_father
 * @property string|null $surname_mother
 * @property string|null $name
 * @property string|null $document
 * @property string|null $email
 * @property \Cake\I18n\FrozenDate|null $birthdate
 * @property string|null $gender
 * @property string|null $state
 * @property int|null $user_created
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $user_modified
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\IdentificationDocument $identification_document
 * @property \App\Model\Entity\Address $address
 */
class Person extends Entity
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
        'identification_document_id' => true,
        'address_id' => true,
        'surname_father' => true,
        'surname_mother' => true,
        'name' => true,
        'document' => true,
        'email' => true,
        'birthdate' => true,
        'gender' => true,
        'state' => true,
        'user_created' => true,
        'created' => true,
        'user_modified' => true,
        'modified' => true,
        'identification_document' => true,
        'address' => true
    ];
}
