<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HorometersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HorometersTable Test Case
 */
class HorometersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HorometersTable
     */
    public $Horometers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Horometers',
        'app.Machines',
        'app.Days',
        'app.Nights'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Horometers') ? [] : ['className' => HorometersTable::class];
        $this->Horometers = TableRegistry::getTableLocator()->get('Horometers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Horometers);

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
