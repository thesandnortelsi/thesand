<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HorometersFixture
 */
class HorometersFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'horometer_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'machine_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'day_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'night_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'date' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'state' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_created' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'user_modified' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_horometers_machines1_idx' => ['type' => 'index', 'columns' => ['machine_id'], 'length' => []],
            'fk_horometers_days1_idx' => ['type' => 'index', 'columns' => ['day_id'], 'length' => []],
            'fk_horometers_nights1_idx' => ['type' => 'index', 'columns' => ['night_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['horometer_id'], 'length' => []],
            'fk_horometers_days1' => ['type' => 'foreign', 'columns' => ['day_id'], 'references' => ['days', 'day_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_horometers_machines1' => ['type' => 'foreign', 'columns' => ['machine_id'], 'references' => ['machines', 'machine_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_horometers_nights1' => ['type' => 'foreign', 'columns' => ['night_id'], 'references' => ['nights', 'night_id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'horometer_id' => 1,
                'machine_id' => 1,
                'day_id' => 1,
                'night_id' => 1,
                'date' => '2019-06-21',
                'state' => 'Lorem ',
                'user_created' => 1,
                'created' => '2019-06-21 14:22:03',
                'user_modified' => 1,
                'modified' => '2019-06-21 14:22:03'
            ],
        ];
        parent::init();
    }
}
