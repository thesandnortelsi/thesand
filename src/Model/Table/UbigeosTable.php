<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ubigeos Model
 *
 * @method \App\Model\Entity\Ubigeo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ubigeo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ubigeo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ubigeo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ubigeo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ubigeo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ubigeo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ubigeo findOrCreate($search, callable $callback = null, $options = [])
 */
class UbigeosTable extends Table
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

        $this->setTable('ubigeos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('ubigeo_id')
            ->maxLength('ubigeo_id', 6)
            ->allowEmptyString('ubigeo_id', 'create');

        $validator
            ->scalar('distric_id')
            ->maxLength('distric_id', 6)
            ->requirePresence('distric_id', 'create')
            ->allowEmptyString('distric_id', false);

        $validator
            ->scalar('populated_center')
            ->maxLength('populated_center', 150)
            ->allowEmptyString('populated_center');

        return $validator;
    }
}
