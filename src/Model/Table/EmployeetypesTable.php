<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employeetypes Model
 *
 * @property \App\Model\Table\EmployeeworkinformationsTable|\Cake\ORM\Association\HasMany $Employeeworkinformations
 *
 * @method \App\Model\Entity\Employeetype get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employeetype newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Employeetype[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employeetype|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employeetype saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employeetype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employeetype[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employeetype findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployeetypesTable extends Table
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

        $this->setTable('employeetypes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Employeeworkinformations', [
            'foreignKey' => 'employeetype_id'
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
            ->scalar('private_sector')
            ->maxLength('private_sector', 4);

        $validator
            ->scalar('public_sector')
            ->maxLength('public_sector', 4);

        $validator
            ->scalar('other_entities')
            ->maxLength('other_entities', 4);

        $validator
            ->integer('user_created')
            ->allowEmptyString('user_created');

        $validator
            ->integer('user_modified')
            ->allowEmptyString('user_modified');

        return $validator;
    }
}
