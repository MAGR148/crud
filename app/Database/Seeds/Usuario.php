<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        $nombre = "Angel";
        $a_paterno = "Gómez";
        $a_materno = "Rojas";
        $usuario = "admin";
        $password = password_hash("123", PASSWORD_DEFAULT);
        $type = "admin";

        $data = [
            'nombre' => $nombre,
            'a_paterno' => $a_paterno,
            'a_materno' => $a_materno,
            'usuario' => $usuario,
            'password'    => $password,
            'type' => $type
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        $this->db->table('t_usuario')->insert($data);
    }
}
