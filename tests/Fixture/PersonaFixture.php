<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PersonaFixture
 */
class PersonaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'persona';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'perId' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'perApePaterno' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'perApeMaterno' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'perNombres' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'perDocumento' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'perEmail' => ['type' => 'string', 'length' => 250, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'perFecNacimiento' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'perEstado' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'perUsrCrea' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'perFecCrea' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'perUsrModifica' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'perFecModifica' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'tdiId' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'personacol' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'personacol1' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'dirId' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_persona_tipodocumentoidentidad1_idx' => ['type' => 'index', 'columns' => ['tdiId'], 'length' => []],
            'fk_persona_direccion1_idx' => ['type' => 'index', 'columns' => ['dirId'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['perId', 'dirId'], 'length' => []],
            'fk_persona_direccion1' => ['type' => 'foreign', 'columns' => ['dirId'], 'references' => ['direccion', 'dirId'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_persona_tipodocumentoidentidad1' => ['type' => 'foreign', 'columns' => ['tdiId'], 'references' => ['tipodocumentoidentidad', 'tdiId'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_spanish_ci'
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
                'perId' => 1,
                'perApePaterno' => 'Lorem ipsum dolor sit amet',
                'perApeMaterno' => 'Lorem ipsum dolor sit amet',
                'perNombres' => 'Lorem ipsum dolor sit amet',
                'perDocumento' => 'Lorem ipsum d',
                'perEmail' => 'Lorem ipsum dolor sit amet',
                'perFecNacimiento' => '2019-06-05',
                'perEstado' => 'Lorem ',
                'perUsrCrea' => 1,
                'perFecCrea' => '2019-06-05 21:12:00',
                'perUsrModifica' => 1,
                'perFecModifica' => '2019-06-05 21:12:00',
                'tdiId' => 1,
                'personacol' => 'Lorem ipsum dolor sit amet',
                'personacol1' => 'Lorem ipsum dolor sit amet',
                'dirId' => 1
            ],
        ];
        parent::init();
    }
}
