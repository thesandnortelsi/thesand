<?php
use Migrations\AbstractMigration;

class CrearPersonas extends AbstractMigration
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

       $this->hasTable('Personas');

        if($this->hasTable('Personas')){


        $this->execute('drop table Personas');
        $this->dropTable('Personas');

        }



        $table = $this->table('Personas');


        $table->addColumn('perId', 'integer', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('perApePaterno', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
          $table->addColumn('perApeMaterno', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
            $table->addColumn('perNombres', 'string', [
            'default' => null,
            'limit' => 150,
            'null' => false,
        ]);
              $table->addColumn('perDocumento', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => false,
        ]);
           
               $table->addColumn('perEmail', 'string', [
            'default' => null,
            'limit' => 250,
            'null' => false,
        ]);

            $table->addColumn('perFecNacimiento','datetime');

             $table->addColumn('perEstado','string', [
            'default' => null,
            'limit' => 8,
            'null' => false,
        ]);
          
               $table->addColumn('perUsrCrea','integer', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
               $table->addColumn('perFecCrea','datetime');




                $table->addColumn('perUsrModifica','integer', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
              
             
                $table->addColumn('perFecModifica', 'datetime');
        
        $table->create();

  

    }
}
