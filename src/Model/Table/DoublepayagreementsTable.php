<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Doublepayagreements Model
 *
 * @property \App\Model\Table\EmployeeworkinformationsTable|\Cake\ORM\Association\HasMany $Employeeworkinformations
 *
 * @method \App\Model\Entity\Doublepayagreement get($primaryKey, $options = [])
 * @method \App\Model\Entity\Doublepayagreement newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Doublepayagreement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Doublepayagreement|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Doublepayagreement saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Doublepayagreement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Doublepayagreement[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Doublepayagreement findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DoublepayagreementsTable extends Table
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

        $this->setTable('doublepayagreements');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Employeeworkinformations', [
            'foreignKey' => 'doublepayagreement_id'
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
            ->integer('code_sunat');

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
