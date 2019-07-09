<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZonetypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZonetypesTable Test Case
 */
class ZonetypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZonetypesTable
     */
    public $Zonetypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Zonetypes',
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
        $config = TableRegistry::getTableLocator()->exists('Zonetypes') ? [] : ['className' => ZonetypesTable::class];
        $this->Zonetypes = TableRegistry::getTableLocator()->get('Zonetypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Zonetypes);

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
