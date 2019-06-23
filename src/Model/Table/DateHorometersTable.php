<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DateHorometers Model
 *
 * @property \App\Model\Table\MachinesTable|\Cake\ORM\Association\BelongsToMany $Machines
 *
 * @method \App\Model\Entity\DateHorometer get($primaryKey, $options = [])
 * @method \App\Model\Entity\DateHorometer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DateHorometer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DateHorometer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DateHorometer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DateHorometer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DateHorometer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DateHorometer findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DateHorometersTable extends Table
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

        $this->setTable('date_horometers');
        $this->setDisplayField('date_horometer_id');
        $this->setPrimaryKey('date_horometer_id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Machines', [
            'foreignKey' => 'date_horometer_id',
            'targetForeignKey' => 'machine_id',
            'joinTable' => 'date_horometers_machines'
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
            ->integer('date_horometer_id')
            ->allowEmptyString('date_horometer_id', 'create');

        $validator
            ->date('date')
            ->allowEmptyDate('date');

        $validator
            ->scalar('state')
            ->maxLength('state', 8)
            ->allowEmptyString('state');

        $validator
            ->integer('user_created')
            ->allowEmptyString('user_created');

        $validator
            ->integer('user_modified')
            ->allowEmptyString('user_modified');

        return $validator;
    }
}
