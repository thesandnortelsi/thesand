<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Machines Model
 *
 * @property \App\Model\Table\AreasTable|\Cake\ORM\Association\BelongsTo $Areas
 * @property \App\Model\Table\ModelsTable|\Cake\ORM\Association\BelongsTo $Models
 * @property \App\Model\Table\GroupsTable|\Cake\ORM\Association\BelongsTo $Groups
 * @property \App\Model\Table\FrequencysTable|\Cake\ORM\Association\BelongsTo $Frequencys
 * @property |\Cake\ORM\Association\HasMany $Programmings
 * @property \App\Model\Table\DatehorometersTable|\Cake\ORM\Association\BelongsToMany $Datehorometers
 *
 * @method \App\Model\Entity\Machine get($primaryKey, $options = [])
 * @method \App\Model\Entity\Machine newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Machine[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Machine|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Machine saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Machine patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Machine[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Machine findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MachinesTable extends Table
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

        $this->setTable('machines');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Areas', [
            'foreignKey' => 'area_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Models', [
            'foreignKey' => 'model_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Groups', [
            'foreignKey' => 'group_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Frequencys', [
            'foreignKey' => 'frequency_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Programmings', [
            'foreignKey' => 'machine_id'
        ]);
        $this->belongsToMany('Datehorometers', [
            'foreignKey' => 'machine_id',
            'targetForeignKey' => 'datehorometer_id',
            'joinTable' => 'datehorometers_machines'
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
            ->scalar('code')
            ->maxLength('code', 10)
            ->allowEmptyString('code');

        $validator
            ->scalar('name')
            ->maxLength('name', 150)
            ->allowEmptyString('name');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmptyString('description');

        $validator
            ->scalar('series')
            ->maxLength('series', 45)
            ->allowEmptyString('series');

        $validator
            ->scalar('plate')
            ->maxLength('plate', 25)
            ->allowEmptyString('plate');

        $validator
            ->scalar('year')
            ->allowEmptyString('year');

        $validator
            ->date('ispection')
            ->allowEmptyDate('ispection');

        $validator
            ->date('entry')
            ->allowEmptyDate('entry');

        $validator
            ->decimal('horometer')
            ->allowEmptyString('horometer');

        $validator
            ->decimal('horometer_mantenaice')
            ->allowEmptyString('horometer_mantenaice');

        $validator
            ->integer('position')
            ->allowEmptyString('position');

        $validator
            ->date('date_mantenaice')
            ->allowEmptyDate('date_mantenaice');

        $validator
            ->decimal('factor')
            ->allowEmptyString('factor');

        $validator
            ->scalar('state')
            ->maxLength('state', 25)
            ->allowEmptyString('state');

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
        $rules->add($rules->existsIn(['area_id'], 'Areas'));
        $rules->add($rules->existsIn(['model_id'], 'Models'));
        $rules->add($rules->existsIn(['group_id'], 'Groups'));
        $rules->add($rules->existsIn(['frequency_id'], 'Frequencys'));

        return $rules;
    }
}
