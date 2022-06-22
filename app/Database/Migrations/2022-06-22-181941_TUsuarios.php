<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            //Identificador del usuario
            'id_usuario' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            //nombre del usuario
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            //apellido paterno del usuario
            'a_paterno' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            //apellido materno del usuario
            'a_materno' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            //usuario para acceder al sitio web
            'usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            //contraseña
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            //tipo de usuario
            'type' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id_usuario', true);
        $this->forge->createTable('t_usuario');
    }

    public function down()
    {
        $this->forge->dropTable('t_usuario');
    }
}