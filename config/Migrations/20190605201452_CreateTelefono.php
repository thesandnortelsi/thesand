<?php
use Migrations\AbstractMigration;

class CreateTelefono extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {

        $telefono=$this->table('Telefono');
        $telefono->addColumn('telId','integer',[
            'default' => null,
            'null' => false
        ]);

        $telefono->addColumn('telNumero','string',[
            'default' => null,
            'limit'=>20,
            'null' => false
        ]);
          $telefono->addColumn('telOperador','string',[
            'default' => null,
            'limit'=>20,
            'null' => false
        ]);
             $telefono->addColumn('telTipo','string',[
            'default' => null,
            'limit'=>50,
            'null' => false
        ]);
            $telefono->addColumn('telUsrCrea','string',[
            'default' => null,
            'limit'=>50,
            'null' => false
        ]);
            $telefono->addColumn('telFecCrea','datetime',[
            'default' => null,
            'null' => false
        ]);
            $telefono->addColumn('telUsrModifica','string',[
            'default' => null,
            'null' => false
        ]);
            $telefono->addColumn('telFecModifica','datetime',[
            'default' => null,
            'null' => false
        ]);

        $telefono->create();
    }
}
