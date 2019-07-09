<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeepersonalinformationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeepersonalinformationsTable Test Case
 */
class EmployeepersonalinformationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeepersonalinformationsTable
     */
    public $Employeepersonalinformations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Employeepersonalinformations',
        'app.Documenttypes',
        'app.Ubigeos',
        'app.Nationalities',
        'app.Sendingcountries',
        'app.Streettypes',
        'app.Zonetypes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Employeepersonalinformations') ? [] : ['className' => EmployeepersonalinformationsTable::class];
        $this->Employeepersonalinformations = TableRegistry::getTableLocator()->get('Employeepersonalinformations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Employeepersonalinformations);

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
