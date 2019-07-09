<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaymenttypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaymenttypesTable Test Case
 */
class PaymenttypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PaymenttypesTable
     */
    public $Paymenttypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Paymenttypes',
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
        $config = TableRegistry::getTableLocator()->exists('Paymenttypes') ? [] : ['className' => PaymenttypesTable::class];
        $this->Paymenttypes = TableRegistry::getTableLocator()->get('Paymenttypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Paymenttypes);

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
