<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeetypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeetypesTable Test Case
 */
class EmployeetypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeetypesTable
     */
    public $Employeetypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Employeetypes',
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
        $config = TableRegistry::getTableLocator()->exists('Employeetypes') ? [] : ['className' => EmployeetypesTable::class];
        $this->Employeetypes = TableRegistry::getTableLocator()->get('Employeetypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Employeetypes);

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
