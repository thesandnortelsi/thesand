<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeriodicityremunerationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeriodicityremunerationsTable Test Case
 */
class PeriodicityremunerationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PeriodicityremunerationsTable
     */
    public $Periodicityremunerations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Periodicityremunerations',
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
        $config = TableRegistry::getTableLocator()->exists('Periodicityremunerations') ? [] : ['className' => PeriodicityremunerationsTable::class];
        $this->Periodicityremunerations = TableRegistry::getTableLocator()->get('Periodicityremunerations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Periodicityremunerations);

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
