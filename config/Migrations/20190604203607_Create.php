<?php
use Migrations\AbstractMigration;

class Create extends AbstractMigration
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
        $table = $this->table('Personas');
        $table->addColumn('id_persona', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('Ape_Paterno', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
          $table->addColumn('Ape_Materno', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
            $table->addColumn('Nombre_1', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
              $table->addColumn('Nombre_2', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
               $table->addColumn('Fecha_Nacimiento','datetime');

               $table->addColumn('Tipo_Doc_Identidad','string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
               $table->addColumn('Num_Identidad','string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
                $table->addColumn('Email','string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
              


               $table->addColumn('created', 'datetime');
                $table->addColumn('modified', 'datetime');
        $table->create();
    }
}
