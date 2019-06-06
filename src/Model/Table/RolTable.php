<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rol Model
 *
 * @method \App\Model\Entity\Rol get($primaryKey, $options = [])
 * @method \App\Model\Entity\Rol newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Rol[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Rol|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rol saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rol patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Rol[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Rol findOrCreate($search, callable $callback = null, $options = [])
 */
class RolTable extends Table
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

        $this->setTable('rol');
        $this->setDisplayField('rolId');
        $this->setPrimaryKey('rolId');
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
            ->integer('rolId')
            ->allowEmptyString('rolId', 'create');

        $validator
            ->scalar('rolDescripcion')
            ->maxLength('rolDescripcion', 100)
            ->allowEmptyString('rolDescripcion');

        $validator
            ->scalar('rolEstado')
            ->maxLength('rolEstado', 8)
            ->allowEmptyString('rolEstado');

        $validator
            ->integer('rolUsrCrea')
            ->allowEmptyString('rolUsrCrea');

        $validator
            ->dateTime('rolFecCrea')
            ->allowEmptyDateTime('rolFecCrea');

        $validator
            ->integer('rolUsrModifica')
            ->allowEmptyString('rolUsrModifica');

        $validator
            ->dateTime('rolFecModifica')
            ->allowEmptyDateTime('rolFecModifica');

        return $validator;
    }
}
