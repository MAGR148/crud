<?php namespace App\Models;

    use Codeigniter\Model;

    class Usuarios extends Model {
        public function obtenerUsuario($data) {
            $usuario = $this->db->table('t_usuario');
            $usuario->where($data);
            return $usuario->get()->getResultArray(); 
        }
    }