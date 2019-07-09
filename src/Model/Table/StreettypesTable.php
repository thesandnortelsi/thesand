<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Streettypes Model
 *
 * @property \App\Model\Table\EmployeepersonalinformationsTable|\Cake\ORM\Association\HasMany $Employeepersonalinformations
 *
 * @method \App\Model\Entity\Streettype get($primaryKey, $options = [])
 * @method \App\Model\Entity\Streettype newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Streettype[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Streettype|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Streettype saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Streettype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Streettype[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Streettype findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class StreettypesTable extends Table
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

        $this->setTable('streettypes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Employeepersonalinformations', [
            'foreignKey' => 'streettype_id'
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
            ->integer('user_created')
            ->allowEmptyString('user_created');

        $validator
            ->integer('user_modified')
            ->allowEmptyString('user_modified');

        return $validator;
    }
}
