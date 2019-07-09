<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmployeepersonalinformationsFixture
 */
class EmployeepersonalinformationsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'surname_father' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'surname_mother' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'name' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'documenttype_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'document' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'birthdate' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'gender' => ['type' => 'string', 'length' => 6, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'state' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_created' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'user_modified' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'ubigeo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nationality_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'sendingcountry_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'streettype_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'zonetype_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'phone' => ['type' => 'string', 'length' => 9, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'street_name' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'street_number' => ['type' => 'string', 'length' => 4, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'department' => ['type' => 'string', 'length' => 4, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'inside' => ['type' => 'string', 'length' => 4, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'mz' => ['type' => 'string', 'length' => 4, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'lot' => ['type' => 'string', 'length' => 4, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'kilometer' => ['type' => 'string', 'length' => 4, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'block' => ['type' => 'string', 'length' => 4, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'stage' => ['type' => 'string', 'length' => 4, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'zone_name' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'reference' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'place_birth' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_persons_ubigeos10' => ['type' => 'index', 'columns' => ['ubigeo_id'], 'length' => []],
            'fk_persons_nationalities10' => ['type' => 'index', 'columns' => ['nationality_id'], 'length' => []],
            'fk_persons_documenttypes10' => ['type' => 'index', 'columns' => ['documenttype_id'], 'length' => []],
            'fk_persons_sendingcountries210' => ['type' => 'index', 'columns' => ['sendingcountry_id'], 'length' => []],
            'fk_persons_streettypes210' => ['type' => 'index', 'columns' => ['streettype_id'], 'length' => []],
            'fk_persons_zonetypes10' => ['type' => 'index', 'columns' => ['zonetype_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_persons_documenttypes10' => ['type' => 'foreign', 'columns' => ['documenttype_id'], 'references' => ['documenttypes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_persons_nationalities10' => ['type' => 'foreign', 'columns' => ['nationality_id'], 'references' => ['nationalities', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_persons_sendingcountries210' => ['type' => 'foreign', 'columns' => ['sendingcountry_id'], 'references' => ['sendingcountries', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_persons_streettypes210' => ['type' => 'foreign', 'columns' => ['streettype_id'], 'references' => ['streettypes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_persons_ubigeos10' => ['type' => 'foreign', 'columns' => ['ubigeo_id'], 'references' => ['ubigeos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_persons_zonetypes10' => ['type' => 'foreign', 'columns' => ['zonetype_id'], 'references' => ['zonetypes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'surname_father' => 'Lorem ipsum dolor sit amet',
                'surname_mother' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'documenttype_id' => 1,
                'document' => 'Lorem ipsum d',
                'email' => 'Lorem ipsum dolor sit amet',
                'birthdate' => '2019-07-07',
                'gender' => 'Lore',
                'state' => 'Lorem ',
                'user_created' => 1,
                'created' => '2019-07-07 17:54:01',
                'user_modified' => 1,
                'modified' => '2019-07-07 17:54:01',
                'ubigeo_id' => 1,
                'nationality_id' => 1,
                'sendingcountry_id' => 1,
                'streettype_id' => 1,
                'zonetype_id' => 1,
                'phone' => 'Lorem i',
                'street_name' => 'Lorem ipsum dolor ',
                'street_number' => 'Lo',
                'department' => 'Lo',
                'inside' => 'Lo',
                'mz' => 'Lo',
                'lot' => 'Lo',
                'kilometer' => 'Lo',
                'block' => 'Lo',
                'stage' => 'Lo',
                'zone_name' => 'Lorem ipsum dolor ',
                'reference' => 'Lorem ipsum dolor sit amet',
                'place_birth' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
