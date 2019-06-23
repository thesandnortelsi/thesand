<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DateHorometersMachines Model
 *
 * @property \App\Model\Table\DateHorometersTable|\Cake\ORM\Association\BelongsTo $DateHorometers
 * @property \App\Model\Table\MachinesTable|\Cake\ORM\Association\BelongsTo $Machines
 *
 * @method \App\Model\Entity\DateHorometersMachine get($primaryKey, $options = [])
 * @method \App\Model\Entity\DateHorometersMachine newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DateHorometersMachine[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DateHorometersMachine|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DateHorometersMachine saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DateHorometersMachine patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DateHorometersMachine[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DateHorometersMachine findOrCreate($search, callable $callback = null, $options = [])
 */
class DateHorometersMachinesTable extends Table
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

        $this->setTable('date_horometers_machines');
        $this->setDisplayField('date_horometer_id');
        $this->setPrimaryKey(['date_horometer_id', 'machine_id']);

        $this->belongsTo('DateHorometers', [
            'foreignKey' => 'date_horometer_id',
            'joinType' => 'INNER'
        ]);
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
            ->decimal('day')
            ->allowEmptyString('day');

        $validator
            ->decimal('night')
            ->allowEmptyString('night');

        $validator
            ->decimal('last')
            ->allowEmptyString('last');

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
        $rules->add($rules->existsIn(['date_horometer_id'], 'DateHorometers'));
        $rules->add($rules->existsIn(['machine_id'], 'Machines'));

        return $rules;
    }
}
