<?php
use Migrations\AbstractMigration;

class CrearDireccion extends AbstractMigration
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
        $direccion= $this->table('direccion');

         $direccion->addColumn('dirId', 'integer', [
            'default' => null,
            'limit' => 45,
            'null' => false,
        ]);


        $direccion->addColumn('dirTipoVia', 'string', [
            'default' => null,
            'limit' => 45,
            'null' => false,
        ]);

         $direccion->addColumn('dirUsrCrea', 'integer', [
            'default' => null,
            'limit' => 45,
            'null' => false,
        ]);

           $direccion->addColumn('dirFecCrea', 'datetime');

           $direccion->addColumn('dirUsrModifica', 'integer');
           $direccion->addColumn('dirFecModifica', 'datetime');


         $direccion->addColumn('ubiId', 'integer', [
            'default' => null,
            'limit' => 45,
            'null' => false,
        ]);


         $direccion->addColumn('dirNombreVia', 'string', [
            'default' => null,
            'limit' => 45,
            'null' => false,
        ]);


         $direccion->create();




    }

}
