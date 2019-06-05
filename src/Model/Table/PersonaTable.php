<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Persona Model
 *
 * @method \App\Model\Entity\Persona get($primaryKey, $options = [])
 * @method \App\Model\Entity\Persona newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Persona[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Persona|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Persona saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Persona patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Persona[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Persona findOrCreate($search, callable $callback = null, $options = [])
 */
class PersonaTable extends Table
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

        $this->setTable('persona');
        $this->setDisplayField('perId');
        $this->setPrimaryKey(['perId', 'dirId']);
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
            ->integer('perId')
            ->allowEmptyString('perId', 'create');

        $validator
            ->scalar('perApePaterno')
            ->maxLength('perApePaterno', 100)
            ->allowEmptyString('perApePaterno');

        $validator
            ->scalar('perApeMaterno')
            ->maxLength('perApeMaterno', 100)
            ->allowEmptyString('perApeMaterno');

        $validator
            ->scalar('perNombres')
            ->maxLength('perNombres', 150)
            ->allowEmptyString('perNombres');

        $validator
            ->scalar('perDocumento')
            ->maxLength('perDocumento', 15)
            ->allowEmptyString('perDocumento');

        $validator
            ->scalar('perEmail')
            ->maxLength('perEmail', 250)
            ->allowEmptyString('perEmail');

        $validator
            ->date('perFecNacimiento')
            ->allowEmptyDate('perFecNacimiento');

        $validator
            ->scalar('perEstado')
            ->maxLength('perEstado', 8)
            ->allowEmptyString('perEstado');

        $validator
            ->integer('perUsrCrea')
            ->allowEmptyString('perUsrCrea');

        $validator
            ->dateTime('perFecCrea')
            ->allowEmptyDateTime('perFecCrea');

        $validator
            ->integer('perUsrModifica')
            ->allowEmptyString('perUsrModifica');

        $validator
            ->dateTime('perFecModifica')
            ->allowEmptyDateTime('perFecModifica');

        $validator
            ->integer('tdiId')
            ->requirePresence('tdiId', 'create')
            ->allowEmptyString('tdiId', false);

        $validator
            ->scalar('personacol')
            ->maxLength('personacol', 45)
            ->allowEmptyString('personacol');

        $validator
            ->scalar('personacol1')
            ->maxLength('personacol1', 45)
            ->allowEmptyString('personacol1');

        $validator
            ->integer('dirId')
            ->allowEmptyString('dirId', 'create');

        return $validator;
    }
}
