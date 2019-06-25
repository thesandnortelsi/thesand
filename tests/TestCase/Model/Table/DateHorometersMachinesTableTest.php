<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DatehorometersMachinesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DatehorometersMachinesTable Test Case
 */
class DatehorometersMachinesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DatehorometersMachinesTable
     */
    public $DatehorometersMachines;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DatehorometersMachines',
        'app.Datehorometers',
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
        $config = TableRegistry::getTableLocator()->exists('DatehorometersMachines') ? [] : ['className' => DatehorometersMachinesTable::class];
        $this->DatehorometersMachines = TableRegistry::getTableLocator()->get('DatehorometersMachines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DatehorometersMachines);

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
