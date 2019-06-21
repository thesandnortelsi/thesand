<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NightsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NightsTable Test Case
 */
class NightsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NightsTable
     */
    public $Nights;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('Nights') ? [] : ['className' => NightsTable::class];
        $this->Nights = TableRegistry::getTableLocator()->get('Nights', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Nights);

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
