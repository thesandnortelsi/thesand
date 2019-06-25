<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DatehorometersMachines Model
 *
 * @property \App\Model\Table\DatehorometersTable|\Cake\ORM\Association\BelongsTo $Datehorometers
 * @property \App\Model\Table\MachinesTable|\Cake\ORM\Association\BelongsTo $Machines
 *
 * @method \App\Model\Entity\DatehorometersMachine get($primaryKey, $options = [])
 * @method \App\Model\Entity\DatehorometersMachine newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DatehorometersMachine[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DatehorometersMachine|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DatehorometersMachine saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DatehorometersMachine patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DatehorometersMachine[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DatehorometersMachine findOrCreate($search, callable $callback = null, $options = [])
 */
class DatehorometersMachinesTable extends Table
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

        $this->setTable('datehorometers_machines');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Datehorometers', [
            'foreignKey' => 'datehorometer_id',
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
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->decimal('day')
            ->allowEmptyString('day');

        $validator
            ->decimal('night')
            ->allowEmptyString('night');

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
        $rules->add($rules->existsIn(['datehorometer_id'], 'Datehorometers'));
        $rules->add($rules->existsIn(['machine_id'], 'Machines'));

        return $rules;
    }
}
