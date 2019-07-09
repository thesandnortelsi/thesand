<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContracttypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContracttypesTable Test Case
 */
class ContracttypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContracttypesTable
     */
    public $Contracttypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Contracttypes',
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
        $config = TableRegistry::getTableLocator()->exists('Contracttypes') ? [] : ['className' => ContracttypesTable::class];
        $this->Contracttypes = TableRegistry::getTableLocator()->get('Contracttypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contracttypes);

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
}
