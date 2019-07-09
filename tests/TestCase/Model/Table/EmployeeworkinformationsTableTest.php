<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeeworkinformationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeeworkinformationsTable Test Case
 */
class EmployeeworkinformationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeeworkinformationsTable
     */
    public $Employeeworkinformations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Employeeworkinformations',
        'app.Laborregimes',
        'app.Educationalsituations',
        'app.Activities',
        'app.Contracttypes',
        'app.Periodicityremunerations',
        'app.Situations',
        'app.Specialsituations',
        'app.Paymenttypes',
        'app.Occupationalcategories',
        'app.Doublepayagreements',
        'app.Payrolltypes',
        'app.Proyects',
        'app.Employeetypes',
        'app.Positions',
        'app.Tasks',
        'app.Areas',
        'app.Specialities',
        'app.Employeepersonalinformations',
        'app.Dataafps',
        'app.Databanks',
        'app.Payrolldetails',
        'app.Residencecontrols'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Employeeworkinformations') ? [] : ['className' => EmployeeworkinformationsTable::class];
        $this->Employeeworkinformations = TableRegistry::getTableLocator()->get('Employeeworkinformations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Employeeworkinformations);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
