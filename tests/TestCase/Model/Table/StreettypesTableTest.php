<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StreettypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StreettypesTable Test Case
 */
class StreettypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StreettypesTable
     */
    public $Streettypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Streettypes',
        'app.Employeepersonalinformations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Streettypes') ? [] : ['className' => StreettypesTable::class];
        $this->Streettypes = TableRegistry::getTableLocator()->get('Streettypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Streettypes);

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
