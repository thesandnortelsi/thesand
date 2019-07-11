<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeedataaditionalsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeedataaditionalsTable Test Case
 */
class EmployeedataaditionalsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeedataaditionalsTable
     */
    public $Employeedataaditionals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Employeedataaditionals',
        'app.Employeeworkinformations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Employeedataaditionals') ? [] : ['className' => EmployeedataaditionalsTable::class];
        $this->Employeedataaditionals = TableRegistry::getTableLocator()->get('Employeedataaditionals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Employeedataaditionals);

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
