<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Afps Model
 *
 * @property \App\Model\Table\DataafpsTable|\Cake\ORM\Association\HasMany $Dataafps
 *
 * @method \App\Model\Entity\Afp get($primaryKey, $options = [])
 * @method \App\Model\Entity\Afp newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Afp[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Afp|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Afp saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Afp patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Afp[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Afp findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AfpsTable extends Table
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

        $this->setTable('afps');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Dataafps', [
            'foreignKey' => 'afp_id'
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
            // ->allowEmptyString('description');

        $validator
            ->integer('user_created')
            ->allowEmptyString('user_created');

        $validator
            ->integer('user_modified')
            ->allowEmptyString('user_modified');

        return $validator;
    }
}
