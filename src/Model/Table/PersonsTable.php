<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Persons Model
 *
 * @property \App\Model\Table\IdentificationDocumentsTable|\Cake\ORM\Association\BelongsTo $IdentificationDocuments
 * @property \App\Model\Table\AddressesTable|\Cake\ORM\Association\BelongsTo $Addresses
 *
 * @method \App\Model\Entity\Person get($primaryKey, $options = [])
 * @method \App\Model\Entity\Person newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Person[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Person|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Person saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Person patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Person[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Person findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PersonsTable extends Table
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

        $this->setTable('persons');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('IdentificationDocuments', [
            'foreignKey' => 'identification_document_id'
        ]);
        $this->belongsTo('Addresses', [
            'foreignKey' => 'address_id'
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
            ->scalar('surname_father')
            ->maxLength('surname_father', 100)
            ->allowEmptyString('surname_father');

        $validator
            ->scalar('surname_mother')
            ->maxLength('surname_mother', 100)
            ->allowEmptyString('surname_mother');

        $validator
            ->scalar('name')
            ->maxLength('name', 150)
            ->allowEmptyString('name');

        $validator
            ->scalar('document')
            ->maxLength('document', 15)
            ->allowEmptyString('document');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->date('birthdate')
            ->allowEmptyDate('birthdate');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 6)
            ->allowEmptyString('gender');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['identification_document_id'], 'IdentificationDocuments'));
        $rules->add($rules->existsIn(['address_id'], 'Addresses'));

        return $rules;
    }
}
