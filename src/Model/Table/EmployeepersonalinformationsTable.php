<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employeepersonalinformations Model
 *
 * @property \App\Model\Table\DocumenttypesTable|\Cake\ORM\Association\BelongsTo $Documenttypes
 * @property \App\Model\Table\UbigeosTable|\Cake\ORM\Association\BelongsTo $Ubigeos
 * @property \App\Model\Table\NationalitiesTable|\Cake\ORM\Association\BelongsTo $Nationalities
 * @property \App\Model\Table\SendingcountriesTable|\Cake\ORM\Association\BelongsTo $Sendingcountries
 * @property \App\Model\Table\StreettypesTable|\Cake\ORM\Association\BelongsTo $Streettypes
 * @property \App\Model\Table\ZonetypesTable|\Cake\ORM\Association\BelongsTo $Zonetypes
 *
 * @method \App\Model\Entity\Employeepersonalinformation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employeepersonalinformation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Employeepersonalinformation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employeepersonalinformation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employeepersonalinformation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employeepersonalinformation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employeepersonalinformation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employeepersonalinformation findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployeepersonalinformationsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('employeepersonalinformations');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Documenttypes', [
            'foreignKey' => 'documenttype_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Geographicallocations', [
            'foreignKey' => 'geographicallocation_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Nationalities', [
            'foreignKey' => 'nationality_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Sendingcountries', [
            'foreignKey' => 'sendingcountry_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Streettypes', [
            'foreignKey' => 'streettype_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Zonetypes', [
            'foreignKey' => 'zonetype_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Employeeworkinformations', [
            'foreignKey' => 'employeepersonalinformation_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id');

        $validator
            ->scalar('surname_father')
            ->maxLength('surname_father', 100);

        $validator
            ->scalar('surname_mother')
            ->maxLength('surname_mother', 100);

        $validator
            ->scalar('name')
            ->maxLength('name', 150);

        $validator
            ->scalar('document')
            ->maxLength('document', 15);

        $validator
            ->email('email');

        $validator
            ->date('birthdate')
            ->allowEmptyDate('birthdate');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 6);

        $validator
            ->scalar('state')
            ->maxLength('state', 8);

        $validator
            ->integer('user_created');

        $validator
            ->integer('user_modified');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 9);

        $validator
            ->scalar('street_name')
            ->maxLength('street_name', 20);

        $validator
            ->scalar('street_number')
            ->maxLength('street_number', 4);

        $validator
            ->scalar('department')
            ->maxLength('department', 4)
            ->allowEmptyString('department');

        $validator
            ->scalar('inside')
            ->maxLength('inside', 4)
            ->allowEmptyString('inside');

        $validator
            ->scalar('mz')
            ->maxLength('mz', 4)
            ->allowEmptyString('mz');

        $validator
            ->scalar('lot')
            ->maxLength('lot', 4)
            ->allowEmptyString('lot');

        $validator
            ->scalar('kilometer')
            ->maxLength('kilometer', 4)
            ->allowEmptyString('kilometer');

        $validator
            ->scalar('block')
            ->maxLength('block', 4)
            ->allowEmptyString('block');

        $validator
            ->scalar('stage')
            ->maxLength('stage', 4)
            ->allowEmptyString('stage');

        $validator
            ->scalar('zone_name')
            ->maxLength('zone_name', 20)
            ->allowEmptyString('zone_name');

        $validator
            ->scalar('reference')
            ->maxLength('reference', 255)
            ->allowEmptyString('reference');

        $validator
            ->scalar('place_birth')
            ->maxLength('place_birth', 255)
            ->allowEmptyString('place_birth');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['documenttype_id'], 'Documenttypes'));
        $rules->add($rules->existsIn(['geographicallocation_id'], 'Geographicallocations'));
        $rules->add($rules->existsIn(['nationality_id'], 'Nationalities'));
        $rules->add($rules->existsIn(['sendingcountry_id'], 'Sendingcountries'));
        $rules->add($rules->existsIn(['streettype_id'], 'Streettypes'));
        $rules->add($rules->existsIn(['zonetype_id'], 'Zonetypes'));

        return $rules;
    }
}
