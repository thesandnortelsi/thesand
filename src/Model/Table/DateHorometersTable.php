<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Datehorometers Model
 *
 * @property \App\Model\Table\MachinesTable|\Cake\ORM\Association\BelongsToMany $Machines
 *
 * @method \App\Model\Entity\Datehorometer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Datehorometer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Datehorometer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Datehorometer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Datehorometer saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Datehorometer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Datehorometer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Datehorometer findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DatehorometersTable extends Table
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

        $this->setTable('datehorometers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Machines', [
            'foreignKey' => 'datehorometer_id',
            'targetForeignKey' => 'machine_id',
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
            ->date('date')
            ->allowEmptyDate('date');

        $validator
            ->integer('user_created')
            ->allowEmptyString('user_created');

        $validator
            ->integer('user_modified')
            ->allowEmptyString('user_modified');

        return $validator;
    }
}
