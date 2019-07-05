<?php
use Migrations\AbstractMigration;

class CrearUbigeo extends AbstractMigration
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

         $ubigeo=$this->table('Ubigeo');
        $ubigeo->addColumn('ubiId','integer',[
            'default' => null,
            'null' => false
        ]);

        $ubigeo->addColumn('ubiDepartamento','string',[
            'default' => null,
            'limit'=>50,
            'null' => false
        ]);
        $ubigeo->addColumn('ubiProvincia','string',[
            'default' => null,
            'limit'=>50,
            'null' => true
        ]);
        $ubigeo->addColumn('ubiDistrito','string',[
            'default' => null,
            'limit'=>50,
            'null' => true
        ]);
        $ubigeo->addColumn('ubiCentroPoblado','string',[
            'default' => null,
            'limit'=>50,
            'null' => true
        ]);
         $ubigeo->addColumn('ubiTipo','string',[
            'default' => null,
            'limit'=>50,
            'null' => true
        ]);


         $ubigeo->create();

    }
}
