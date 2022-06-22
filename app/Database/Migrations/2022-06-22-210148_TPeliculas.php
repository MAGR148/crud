<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TPeliculas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            //Identificador de la película
            'id_pelicula' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            //titulo de la película
            'titulo' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            //año de lanzamiento
            'anio' => [
                'type'       => 'INT',
                'constraint' => '5',
            ],
            //idioma original de la película
            'idioma' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            //Clasificación de la pelicula
            'clasificacion' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            //sinopsis de la película
            'sinopsis' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            //FK de usuario
            'id_usuario' => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
        ]);
        $this->forge->addKey('id_pelicula', true);
        $this->forge->addForeignKey('id_usuario' , 't_usuario','id_usuario','CASCADE','CASCADE');
        $this->forge->createTable('t_peliculas');
    }

    public function down()
    {
        $this->forge->dropTable('t_peliculas');
    }
}
