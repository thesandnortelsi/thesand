<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employeedataaditionals Model
 *
 * @property \App\Model\Table\EmployeeworkinformationsTable|\Cake\ORM\Association\BelongsTo $Employeeworkinformations
 * @property |\Cake\ORM\Association\BelongsTo $Documenttypes
 *
 * @method \App\Model\Entity\Employeedataaditional get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employeedataaditional newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Employeedataaditional[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employeedataaditional|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employeedataaditional saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employeedataaditional patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employeedataaditional[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employeedataaditional findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployeedataaditionalsTable extends Table
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

        $this->setTable('employeedataaditionals');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Employeeworkinformations', [
            'foreignKey' => 'employeeworkinformation_id',
            'joinType' => 'INNER'
        ]);

        $this->belongsTo('Documenttypes', [
            'foreignKey' => 'documenttype_id',
            'joinType' => 'INNER'
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
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 40);

        $validator
            ->scalar('surname_father')
            ->maxLength('surname_father', 40);

        $validator
            ->scalar('surname_mother')
            ->maxLength('surname_mother', 40)
            ->allowEmptyString('surname_mother');

        $validator
            ->scalar('documentnumber')
            ->maxLength('documentnumber', 15);

        $validator
            ->integer('status');

        $validator
            ->integer('children_school_age');

        $validator
            ->integer('employeeworkinformation_id');

        $validator
            ->integer('documenttype_id');

        $validator
            ->integer('family_burden');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 12);

        $validator
            ->scalar('relationship')
            ->maxLength('relationship', 12);

        $validator
            ->integer('user_created')
            ->allowEmptyString('user_created');

        $validator
            ->integer('user_modified')
            ->allowEmptyString('user_modified');

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
        $rules->add($rules->existsIn(['employeeworkinformation_id'], 'Employeeworkinformations'));
        $rules->add($rules->existsIn(['documenttype_id'], 'Documenttypes'));

        return $rules;
    }
}
