<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DatehorometersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DatehorometersTable Test Case
 */
class DatehorometersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DatehorometersTable
     */
    public $Datehorometers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('Datehorometers') ? [] : ['className' => DatehorometersTable::class];
        $this->Datehorometers = TableRegistry::getTableLocator()->get('Datehorometers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Datehorometers);

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
