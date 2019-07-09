<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OccupationalcategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OccupationalcategoriesTable Test Case
 */
class OccupationalcategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OccupationalcategoriesTable
     */
    public $Occupationalcategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Occupationalcategories',
        'app.Employeeworkinformations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Occupationalcategories') ? [] : ['className' => OccupationalcategoriesTable::class];
        $this->Occupationalcategories = TableRegistry::getTableLocator()->get('Occupationalcategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Occupationalcategories);

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
