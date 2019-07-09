<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocumenttypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocumenttypesTable Test Case
 */
class DocumenttypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DocumenttypesTable
     */
    public $Documenttypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Documenttypes',
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
        $config = TableRegistry::getTableLocator()->exists('Documenttypes') ? [] : ['className' => DocumenttypesTable::class];
        $this->Documenttypes = TableRegistry::getTableLocator()->get('Documenttypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Documenttypes);

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
