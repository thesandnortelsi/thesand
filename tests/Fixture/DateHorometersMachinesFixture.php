<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DateHorometersMachinesFixture
 */
class DateHorometersMachinesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'date_horometer_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'machine_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'day' => ['type' => 'decimal', 'length' => 12, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'night' => ['type' => 'decimal', 'length' => 12, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'last' => ['type' => 'decimal', 'length' => 12, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'fk_horometers_has_machines_machines1_idx' => ['type' => 'index', 'columns' => ['machine_id'], 'length' => []],
            'fk_horometers_has_machines_horometers1_idx' => ['type' => 'index', 'columns' => ['date_horometer_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['date_horometer_id', 'machine_id'], 'length' => []],
            'fk_horometers_has_machines_horometers1' => ['type' => 'foreign', 'columns' => ['date_horometer_id'], 'references' => ['date_horometers', 'date_horometer_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_horometers_has_machines_machines1' => ['type' => 'foreign', 'columns' => ['machine_id'], 'references' => ['machines', 'machine_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'date_horometer_id' => 1,
                'machine_id' => 1,
                'day' => 1.5,
                'night' => 1.5,
                'last' => 1.5
            ],
        ];
        parent::init();
    }
}
