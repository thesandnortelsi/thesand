<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UbigeosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UbigeosTable Test Case
 */
class UbigeosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UbigeosTable
     */
    public $Ubigeos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Ubigeos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ubigeos') ? [] : ['className' => UbigeosTable::class];
        $this->Ubigeos = TableRegistry::getTableLocator()->get('Ubigeos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ubigeos);

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
