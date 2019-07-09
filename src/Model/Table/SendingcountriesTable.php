<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sendingcountries Model
 *
 * @property \App\Model\Table\EmployeepersonalinformationsTable|\Cake\ORM\Association\HasMany $Employeepersonalinformations
 *
 * @method \App\Model\Entity\Sendingcountry get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sendingcountry newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sendingcountry[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sendingcountry|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sendingcountry saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sendingcountry patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sendingcountry[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sendingcountry findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SendingcountriesTable extends Table
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

        $this->setTable('sendingcountries');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Employeepersonalinformations', [
            'foreignKey' => 'sendingcountry_id'
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
            ->scalar('description')
            ->maxLength('description', 255);

        $validator
            ->scalar('code_sunat')
            ->maxLength('code_sunat', 3);

        $validator
            ->integer('user_created')
            ->allowEmptyString('user_created');

        $validator
            ->integer('user_modified')
            ->allowEmptyString('user_modified');

        return $validator;
    }
}
