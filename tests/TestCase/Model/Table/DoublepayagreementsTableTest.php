<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DoublepayagreementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DoublepayagreementsTable Test Case
 */
class DoublepayagreementsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DoublepayagreementsTable
     */
    public $Doublepayagreements;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Doublepayagreements',
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
        $config = TableRegistry::getTableLocator()->exists('Doublepayagreements') ? [] : ['className' => DoublepayagreementsTable::class];
        $this->Doublepayagreements = TableRegistry::getTableLocator()->get('Doublepayagreements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Doublepayagreements);

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
