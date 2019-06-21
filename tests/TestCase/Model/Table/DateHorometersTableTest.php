<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DateHorometersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DateHorometersTable Test Case
 */
class DateHorometersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DateHorometersTable
     */
    public $DateHorometers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('DateHorometers') ? [] : ['className' => DateHorometersTable::class];
        $this->DateHorometers = TableRegistry::getTableLocator()->get('DateHorometers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DateHorometers);

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
