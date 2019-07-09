<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EducationalsituationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EducationalsituationsTable Test Case
 */
class EducationalsituationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EducationalsituationsTable
     */
    public $Educationalsituations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Educationalsituations',
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
        $config = TableRegistry::getTableLocator()->exists('Educationalsituations') ? [] : ['className' => EducationalsituationsTable::class];
        $this->Educationalsituations = TableRegistry::getTableLocator()->get('Educationalsituations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Educationalsituations);

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
