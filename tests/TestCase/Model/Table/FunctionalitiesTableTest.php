<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FunctionalitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FunctionalitiesTable Test Case
 */
class FunctionalitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FunctionalitiesTable
     */
    public $Functionalities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Functionalities',
        'app.Rols'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Functionalities') ? [] : ['className' => FunctionalitiesTable::class];
        $this->Functionalities = TableRegistry::getTableLocator()->get('Functionalities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Functionalities);

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
