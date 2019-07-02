<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Programmings Model
 *
 * @property \App\Model\Table\MachinesTable|\Cake\ORM\Association\BelongsTo $Machines
 *
 * @method \App\Model\Entity\Programming get($primaryKey, $options = [])
 * @method \App\Model\Entity\Programming newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Programming[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Programming|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Programming saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Programming patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Programming[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Programming findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProgrammingsTable extends Table
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

        $this->setTable('programmings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Machines', [
            'foreignKey' => 'machine_id',
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
            ->date('date')
            ->allowEmptyDate('date');

        $validator
            ->scalar('year')
            ->maxLength('year', 4)
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
            ->integer('position')
            ->allowEmptyString('position');

        $validator
            ->decimal('horometer_estimated')
            ->allowEmptyString('horometer_estimated');

        $validator
            ->decimal('horometer_mantenaice')
            ->allowEmptyString('horometer_mantenaice');

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

        return $rules;
    }
}
