<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DateHorometersMachinesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DateHorometersMachinesTable Test Case
 */
class DateHorometersMachinesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DateHorometersMachinesTable
     */
    public $DateHorometersMachines;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DateHorometersMachines',
        'app.DateHorometers',
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
        $config = TableRegistry::getTableLocator()->exists('DateHorometersMachines') ? [] : ['className' => DateHorometersMachinesTable::class];
        $this->DateHorometersMachines = TableRegistry::getTableLocator()->get('DateHorometersMachines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DateHorometersMachines);

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
