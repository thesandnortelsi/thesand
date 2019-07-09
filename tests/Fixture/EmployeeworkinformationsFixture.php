<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmployeeworkinformationsFixture
 */
class EmployeeworkinformationsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'laborregime_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'educationalsituation_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'activity_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'disability' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cuspp' => ['type' => 'string', 'length' => 12, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'sctr_pension' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'contracttype_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'alternative_regime' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'maximum_day' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'night_time' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'is_unionized' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'periodicityremuneration_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'basic_remuneration_728' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'situation_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'income_exonerated_5ta' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'specialsituation_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'paymenttype_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'occupationalcategory_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'doublepayagreement_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'payrolltype_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'admission_date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'state' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'liquidation_date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'liquidation_reason' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_created' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'user_modified' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'proyect_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'employeetype_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'position_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'task_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'area_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'speciality_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'employeepersonalinformation_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ruc' => ['type' => 'string', 'length' => 11, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_workers_laborregimes1' => ['type' => 'index', 'columns' => ['laborregime_id'], 'length' => []],
            'fk_workers_educationalsituations1' => ['type' => 'index', 'columns' => ['educationalsituation_id'], 'length' => []],
            'fk_workers_activities1' => ['type' => 'index', 'columns' => ['activity_id'], 'length' => []],
            'fk_workers_contracttypes1' => ['type' => 'index', 'columns' => ['contracttype_id'], 'length' => []],
            'fk_workers_periodicityremunerations1' => ['type' => 'index', 'columns' => ['periodicityremuneration_id'], 'length' => []],
            'fk_workers_situations1' => ['type' => 'index', 'columns' => ['situation_id'], 'length' => []],
            'fk_workers_specialsituations1' => ['type' => 'index', 'columns' => ['specialsituation_id'], 'length' => []],
            'fk_workers_paymenttypes1' => ['type' => 'index', 'columns' => ['paymenttype_id'], 'length' => []],
            'fk_workers_occupationalcategories1' => ['type' => 'index', 'columns' => ['occupationalcategory_id'], 'length' => []],
            'fk_workers_doublepayagreements1' => ['type' => 'index', 'columns' => ['doublepayagreement_id'], 'length' => []],
            'fk_employees_payrolltypes1' => ['type' => 'index', 'columns' => ['payrolltype_id'], 'length' => []],
            'fk_employees_proyects1' => ['type' => 'index', 'columns' => ['proyect_id'], 'length' => []],
            'fk_employees_employeetypes1' => ['type' => 'index', 'columns' => ['employeetype_id'], 'length' => []],
            'fk_employees_positions1' => ['type' => 'index', 'columns' => ['position_id'], 'length' => []],
            'fk_employees_tasks1' => ['type' => 'index', 'columns' => ['task_id'], 'length' => []],
            'fk_employees_areas1' => ['type' => 'index', 'columns' => ['area_id'], 'length' => []],
            'fk_employees_specialties1' => ['type' => 'index', 'columns' => ['speciality_id'], 'length' => []],
            'fk_employeeworkinformations_employeepersonalinformations1' => ['type' => 'index', 'columns' => ['employeepersonalinformation_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_employees_areas1' => ['type' => 'foreign', 'columns' => ['area_id'], 'references' => ['areas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_employees_employeetypes1' => ['type' => 'foreign', 'columns' => ['employeetype_id'], 'references' => ['employeetypes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_employees_payrolltypes1' => ['type' => 'foreign', 'columns' => ['payrolltype_id'], 'references' => ['payrolltypes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_employees_positions1' => ['type' => 'foreign', 'columns' => ['position_id'], 'references' => ['positions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_employees_proyects1' => ['type' => 'foreign', 'columns' => ['proyect_id'], 'references' => ['proyects', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_employees_specialties1' => ['type' => 'foreign', 'columns' => ['speciality_id'], 'references' => ['specialities', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_employees_tasks1' => ['type' => 'foreign', 'columns' => ['task_id'], 'references' => ['tasks', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_employeeworkinformations_employeepersonalinformations1' => ['type' => 'foreign', 'columns' => ['employeepersonalinformation_id'], 'references' => ['employeepersonalinformations', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_workers_activities1' => ['type' => 'foreign', 'columns' => ['activity_id'], 'references' => ['activities', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_workers_contracttypes1' => ['type' => 'foreign', 'columns' => ['contracttype_id'], 'references' => ['contracttypes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_workers_doublepayagreements1' => ['type' => 'foreign', 'columns' => ['doublepayagreement_id'], 'references' => ['doublepayagreements', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_workers_educationalsituations1' => ['type' => 'foreign', 'columns' => ['educationalsituation_id'], 'references' => ['educationalsituations', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_workers_laborregimes1' => ['type' => 'foreign', 'columns' => ['laborregime_id'], 'references' => ['laborregimes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_workers_occupationalcategories1' => ['type' => 'foreign', 'columns' => ['occupationalcategory_id'], 'references' => ['occupationalcategories', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_workers_paymenttypes1' => ['type' => 'foreign', 'columns' => ['paymenttype_id'], 'references' => ['paymenttypes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_workers_periodicityremunerations1' => ['type' => 'foreign', 'columns' => ['periodicityremuneration_id'], 'references' => ['periodicityremunerations', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_workers_situations1' => ['type' => 'foreign', 'columns' => ['situation_id'], 'references' => ['situations', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_workers_specialsituations1' => ['type' => 'foreign', 'columns' => ['specialsituation_id'], 'references' => ['specialsituations', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'laborregime_id' => 1,
                'educationalsituation_id' => 1,
                'activity_id' => 1,
                'disability' => 1,
                'cuspp' => 'Lorem ipsu',
                'sctr_pension' => 1,
                'contracttype_id' => 1,
                'alternative_regime' => 1,
                'maximum_day' => 1,
                'night_time' => 1,
                'is_unionized' => 1,
                'periodicityremuneration_id' => 1,
                'basic_remuneration_728' => 1,
                'situation_id' => 1,
                'income_exonerated_5ta' => 1,
                'specialsituation_id' => 1,
                'paymenttype_id' => 1,
                'occupationalcategory_id' => 1,
                'doublepayagreement_id' => 1,
                'payrolltype_id' => 1,
                'admission_date' => '2019-07-09',
                'state' => 1,
                'liquidation_date' => '2019-07-09',
                'liquidation_reason' => 'Lorem ipsum dolor sit amet',
                'user_created' => 1,
                'created' => '2019-07-09 17:39:32',
                'user_modified' => 1,
                'modified' => '2019-07-09 17:39:32',
                'proyect_id' => 1,
                'employeetype_id' => 1,
                'position_id' => 1,
                'task_id' => 1,
                'area_id' => 1,
                'speciality_id' => 1,
                'employeepersonalinformation_id' => 1,
                'ruc' => 'Lorem ips'
            ],
        ];
        parent::init();
    }
}
