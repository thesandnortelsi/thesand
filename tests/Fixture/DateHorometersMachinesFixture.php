<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DatehorometersMachinesFixture
 */
class DatehorometersMachinesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'datehorometer_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'machines_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'day' => ['type' => 'decimal', 'length' => 10, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'night' => ['type' => 'decimal', 'length' => 10, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'fk_datehorometer_has_machines_machines1_idx' => ['type' => 'index', 'columns' => ['machines_id'], 'length' => []],
            'fk_datehorometer_has_machines_datehorometer1_idx' => ['type' => 'index', 'columns' => ['datehorometer_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_datehorometer_has_machines_datehorometer1' => ['type' => 'foreign', 'columns' => ['datehorometer_id'], 'references' => ['datehorometers', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_datehorometer_has_machines_machines1' => ['type' => 'foreign', 'columns' => ['machines_id'], 'references' => ['machines', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'id' => 1,
                'datehorometer_id' => 1,
                'machines_id' => 1,
                'day' => 1.5,
                'night' => 1.5
            ],
        ];
        parent::init();
    }
}
