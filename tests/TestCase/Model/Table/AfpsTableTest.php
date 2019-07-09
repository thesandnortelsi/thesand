<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AfpsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AfpsTable Test Case
 */
class AfpsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AfpsTable
     */
    public $Afps;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Afps',
        'app.Dataafps'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Afps') ? [] : ['className' => AfpsTable::class];
        $this->Afps = TableRegistry::getTableLocator()->get('Afps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Afps);

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
