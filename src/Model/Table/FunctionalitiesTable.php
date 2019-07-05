<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Functionalities Model
 *
 * @property \App\Model\Table\RolsTable|\Cake\ORM\Association\BelongsToMany $Rols
 *
 * @method \App\Model\Entity\Functionality get($primaryKey, $options = [])
 * @method \App\Model\Entity\Functionality newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Functionality[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Functionality|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Functionality saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Functionality patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Functionality[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Functionality findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FunctionalitiesTable extends Table
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

        $this->setTable('functionalities');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Rols', [
            'foreignKey' => 'functionality_id',
            'targetForeignKey' => 'rol_id',
            'joinTable' => 'functionalities_rols'
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
            ->scalar('name')
            ->maxLength('name', 100)
            ->allowEmptyString('name');

        $validator
            ->scalar('description')
            ->maxLength('description', 150)
            ->allowEmptyString('description');

        $validator
            ->scalar('state')
            ->maxLength('state', 8)
            ->allowEmptyString('state');

        $validator
            ->integer('user_modified')
            ->allowEmptyString('user_modified');

        return $validator;
    }
}
