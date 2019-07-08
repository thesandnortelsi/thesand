<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CorrectivesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CorrectivesTable Test Case
 */
class CorrectivesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CorrectivesTable
     */
    public $Correctives;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Correctives',
        'app.Machines'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Correctives') ? [] : ['className' => CorrectivesTable::class];
        $this->Correctives = TableRegistry::getTableLocator()->get('Correctives', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Correctives);

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
