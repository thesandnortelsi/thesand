<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 *
 * @property \App\Model\Table\MachinesTable|\Cake\ORM\Association\BelongsTo $Machines
 * @property \App\Model\Table\TypeeventsTable|\Cake\ORM\Association\BelongsTo $Typeevents
 * @property \App\Model\Table\CorrectivesTable|\Cake\ORM\Association\HasMany $Correctives
 *
 * @method \App\Model\Entity\Event get($primaryKey, $options = [])
 * @method \App\Model\Entity\Event newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Event[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Event|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Event[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Event findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EventsTable extends Table
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

        $this->setTable('events');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Machines', [
            'foreignKey' => 'machine_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Typeevents', [
            'foreignKey' => 'typeevent_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Correctives', [
            'foreignKey' => 'event_id'
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
            ->maxLength('name', 150)
            ->allowEmptyString('name');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmptyString('description');

        $validator
            ->scalar('observation')
            ->maxLength('observation', 255)
            ->allowEmptyString('observation');

        $validator
            ->integer('operator')
            ->allowEmptyString('operator');

        $validator
            ->integer('responsible')
            ->allowEmptyString('responsible');

        $validator
            ->date('date')
            ->allowEmptyDate('date');

        $validator
            ->scalar('year')
            ->allowEmptyString('year');

        $validator
            ->scalar('month')
            ->maxLength('month', 2)
            ->allowEmptyString('month');

        $validator
            ->scalar('day')
            ->maxLength('day', 2)
            ->allowEmptyString('day');

        $validator
            ->decimal('horometer_start')
            ->allowEmptyString('horometer_start');

        $validator
            ->decimal('horometer_end')
            ->allowEmptyString('horometer_end');

        $validator
            ->time('start')
            ->allowEmptyTime('start');

        $validator
            ->time('end')
            ->allowEmptyTime('end');

        $validator
            ->time('total')
            ->allowEmptyTime('total');

        $validator
            ->date('date_execution')
            ->allowEmptyDate('date_execution');

        $validator
            ->scalar('year_executiom')
            ->allowEmptyString('year_executiom');

        $validator
            ->scalar('month_execution')
            ->maxLength('month_execution', 2)
            ->allowEmptyString('month_execution');

        $validator
            ->scalar('day_execution')
            ->maxLength('day_execution', 2)
            ->allowEmptyString('day_execution');

        $validator
            ->scalar('state')
            ->maxLength('state', 45)
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
        $rules->add($rules->existsIn(['machine_id'], 'Machines'));
        $rules->add($rules->existsIn(['typeevent_id'], 'Typeevents'));

        return $rules;
    }
}
