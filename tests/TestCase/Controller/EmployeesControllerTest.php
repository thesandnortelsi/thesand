<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EmployeesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\EmployeesController Test Case
 */
class EmployeesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Employees',
        'app.Laborregimes',
        'app.Educationalsituations',
        'app.Activities',
        'app.Contracttypes',
        'app.Periodicityremunerations',
        'app.Situations',
        'app.Specialsituations',
        'app.Paymenttypes',
        'app.Occupationalcategories',
        'app.Doublepayagreements',
        'app.Payrolltypes',
        'app.Persons',
        'app.Proyects',
        'app.Employeetypes',
        'app.Dataafps',
        'app.Databanks'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
