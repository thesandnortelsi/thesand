<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contracttypes Model
 *
 * @property \App\Model\Table\EmployeeworkinformationsTable|\Cake\ORM\Association\HasMany $Employeeworkinformations
 *
 * @method \App\Model\Entity\Contracttype get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contracttype newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contracttype[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contracttype|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contracttype saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contracttype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contracttype[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contracttype findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContracttypesTable extends Table
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

        $this->setTable('contracttypes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Employeeworkinformations', [
            'foreignKey' => 'contracttype_id'
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
            ->scalar('code_sunat')
            ->maxLength('code_sunat', 2);

        $validator
            ->scalar('description')
            ->maxLength('description', 255);

        $validator
            ->scalar('abbreviated_description')
            ->maxLength('abbreviated_description', 50);

        $validator
            ->integer('user_created')
            ->allowEmptyString('user_created');

        $validator
            ->integer('user_modified')
            ->allowEmptyString('user_modified');

        return $validator;
    }
}
