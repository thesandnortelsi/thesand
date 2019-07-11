<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employeeworkinformations Model
 *
 * @property \App\Model\Table\LaborregimesTable|\Cake\ORM\Association\BelongsTo $Laborregimes
 * @property \App\Model\Table\EducationalsituationsTable|\Cake\ORM\Association\BelongsTo $Educationalsituations
 * @property \App\Model\Table\ActivitiesTable|\Cake\ORM\Association\BelongsTo $Activities
 * @property \App\Model\Table\ContracttypesTable|\Cake\ORM\Association\BelongsTo $Contracttypes
 * @property \App\Model\Table\PeriodicityremunerationsTable|\Cake\ORM\Association\BelongsTo $Periodicityremunerations
 * @property \App\Model\Table\SituationsTable|\Cake\ORM\Association\BelongsTo $Situations
 * @property \App\Model\Table\SpecialsituationsTable|\Cake\ORM\Association\BelongsTo $Specialsituations
 * @property \App\Model\Table\PaymenttypesTable|\Cake\ORM\Association\BelongsTo $Paymenttypes
 * @property \App\Model\Table\OccupationalcategoriesTable|\Cake\ORM\Association\BelongsTo $Occupationalcategories
 * @property \App\Model\Table\DoublepayagreementsTable|\Cake\ORM\Association\BelongsTo $Doublepayagreements
 * @property \App\Model\Table\PayrolltypesTable|\Cake\ORM\Association\BelongsTo $Payrolltypes
 * @property \App\Model\Table\ProyectsTable|\Cake\ORM\Association\BelongsTo $Proyects
 * @property \App\Model\Table\EmployeetypesTable|\Cake\ORM\Association\BelongsTo $Employeetypes
 * @property \App\Model\Table\PositionsTable|\Cake\ORM\Association\BelongsTo $Positions
 * @property \App\Model\Table\TasksTable|\Cake\ORM\Association\BelongsTo $Tasks
 * @property \App\Model\Table\AreasTable|\Cake\ORM\Association\BelongsTo $Areas
 * @property \App\Model\Table\SpecialitiesTable|\Cake\ORM\Association\BelongsTo $Specialities
 * @property \App\Model\Table\EmployeepersonalinformationsTable|\Cake\ORM\Association\BelongsTo $Employeepersonalinformations
 * @property \App\Model\Table\DataafpsTable|\Cake\ORM\Association\HasMany $Dataafps
 * @property \App\Model\Table\DatabanksTable|\Cake\ORM\Association\HasMany $Databanks
 * @property \App\Model\Table\PayrolldetailsTable|\Cake\ORM\Association\HasMany $Payrolldetails
 * @property \App\Model\Table\ResidencecontrolsTable|\Cake\ORM\Association\HasMany $Residencecontrols
 *
 * @method \App\Model\Entity\Employeeworkinformation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employeeworkinformation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Employeeworkinformation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employeeworkinformation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employeeworkinformation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employeeworkinformation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employeeworkinformation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employeeworkinformation findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployeeworkinformationsTable extends Table
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

        $this->setTable('employeeworkinformations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Laborregimes', [
            'foreignKey' => 'laborregime_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Educationalsituations', [
            'foreignKey' => 'educationalsituation_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Activities', [
            'foreignKey' => 'activity_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Contracttypes', [
            'foreignKey' => 'contracttype_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Periodicityremunerations', [
            'foreignKey' => 'periodicityremuneration_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Situations', [
            'foreignKey' => 'situation_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Specialsituations', [
            'foreignKey' => 'specialsituation_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Paymenttypes', [
            'foreignKey' => 'paymenttype_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Occupationalcategories', [
            'foreignKey' => 'occupationalcategory_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Doublepayagreements', [
            'foreignKey' => 'doublepayagreement_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Payrolltypes', [
            'foreignKey' => 'payrolltype_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Proyects', [
            'foreignKey' => 'proyect_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Employeetypes', [
            'foreignKey' => 'employeetype_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Positions', [
            'foreignKey' => 'position_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tasks', [
            'foreignKey' => 'task_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Areas', [
            'foreignKey' => 'area_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Specialities', [
            'foreignKey' => 'speciality_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Employeepersonalinformations', [
            'foreignKey' => 'employeepersonalinformation_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Dataafps', [
            'foreignKey' => 'employeeworkinformation_id'
        ]);
        $this->hasMany('Databanks', [
            'foreignKey' => 'employeeworkinformation_id'
        ]);
        $this->hasMany('Payrolldetails', [
            'foreignKey' => 'employeeworkinformation_id'
        ]);
        $this->hasMany('Residencecontrols', [
            'foreignKey' => 'employeeworkinformation_id'
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
            ->integer('disability')
            ->allowEmptyString('disability');

        $validator
            ->scalar('cuspp')
            ->maxLength('cuspp', 12)
            ->allowEmptyString('cuspp');

        $validator
            ->integer('sctr_pension')
            ->allowEmptyString('sctr_pension');

        $validator
            ->integer('alternative_regime')
            ->allowEmptyString('alternative_regime');

        $validator
            ->integer('maximum_day')
            ->allowEmptyString('maximum_day');

        $validator
            ->integer('night_time')
            ->allowEmptyString('night_time');

        $validator
            ->integer('is_unionized')
            ->allowEmptyString('is_unionized');

        $validator
            ->numeric('basic_remuneration_728')
            ->allowEmptyString('basic_remuneration_728');

        $validator
            ->integer('income_exonerated_5ta')
            ->allowEmptyString('income_exonerated_5ta');

        $validator
            ->date('admission_date');

        $validator
            ->integer('state')
            ->allowEmptyString('state');

        $validator
            ->date('liquidation_date')
            ->allowEmptyDate('liquidation_date');

        $validator
            ->scalar('liquidation_reason')
            ->maxLength('liquidation_reason', 255)
            ->allowEmptyString('liquidation_reason');

        $validator
            ->integer('user_created')
            ->allowEmptyString('user_created');

        $validator
            ->integer('user_modified')
            ->allowEmptyString('user_modified');

        $validator
            ->scalar('ruc')
            ->maxLength('ruc', 11)
            ->requirePresence('ruc', 'create')
            ->allowEmptyString('ruc');

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
        $rules->add($rules->existsIn(['laborregime_id'], 'Laborregimes'));
        $rules->add($rules->existsIn(['educationalsituation_id'], 'Educationalsituations'));
        $rules->add($rules->existsIn(['activity_id'], 'Activities'));
        $rules->add($rules->existsIn(['contracttype_id'], 'Contracttypes'));
        $rules->add($rules->existsIn(['periodicityremuneration_id'], 'Periodicityremunerations'));
        $rules->add($rules->existsIn(['situation_id'], 'Situations'));
        $rules->add($rules->existsIn(['specialsituation_id'], 'Specialsituations'));
        $rules->add($rules->existsIn(['paymenttype_id'], 'Paymenttypes'));
        $rules->add($rules->existsIn(['occupationalcategory_id'], 'Occupationalcategories'));
        $rules->add($rules->existsIn(['doublepayagreement_id'], 'Doublepayagreements'));
        $rules->add($rules->existsIn(['payrolltype_id'], 'Payrolltypes'));
        $rules->add($rules->existsIn(['proyect_id'], 'Proyects'));
        $rules->add($rules->existsIn(['employeetype_id'], 'Employeetypes'));
        $rules->add($rules->existsIn(['position_id'], 'Positions'));
        $rules->add($rules->existsIn(['task_id'], 'Tasks'));
        $rules->add($rules->existsIn(['area_id'], 'Areas'));
        $rules->add($rules->existsIn(['speciality_id'], 'Specialities'));
        $rules->add($rules->existsIn(['employeepersonalinformation_id'], 'Employeepersonalinformations'));

        return $rules;
    }
}
