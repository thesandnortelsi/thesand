<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FrequencysTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FrequencysTable Test Case
 */
class FrequencysTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FrequencysTable
     */
    public $Frequencys;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Frequencys',
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
        $config = TableRegistry::getTableLocator()->exists('Frequencys') ? [] : ['className' => FrequencysTable::class];
        $this->Frequencys = TableRegistry::getTableLocator()->get('Frequencys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Frequencys);

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
