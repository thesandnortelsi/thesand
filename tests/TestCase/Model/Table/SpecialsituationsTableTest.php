<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpecialsituationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpecialsituationsTable Test Case
 */
class SpecialsituationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SpecialsituationsTable
     */
    public $Specialsituations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Specialsituations',
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
        $config = TableRegistry::getTableLocator()->exists('Specialsituations') ? [] : ['className' => SpecialsituationsTable::class];
        $this->Specialsituations = TableRegistry::getTableLocator()->get('Specialsituations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Specialsituations);

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
