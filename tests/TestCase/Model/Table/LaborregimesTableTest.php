<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LaborregimesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LaborregimesTable Test Case
 */
class LaborregimesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LaborregimesTable
     */
    public $Laborregimes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Laborregimes',
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
        $config = TableRegistry::getTableLocator()->exists('Laborregimes') ? [] : ['className' => LaborregimesTable::class];
        $this->Laborregimes = TableRegistry::getTableLocator()->get('Laborregimes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Laborregimes);

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
