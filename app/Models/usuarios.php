<?php namespace App\Models;

    use CodeIgniter\Model;

    class Usuarios extends Model {
        public function obtenerUsuario($data) {
            $usuario = $this->db->table('t_usuario');
            $usuario->where($data);
            return $usuario->get()->getResultArray(); 
        }
        //Método para insertar un nuevo usuario
        public function insertar($data){
            $usuario = $this->db->table('t_usuario');
            $usuario->insert($data);

            return $this->db->insertID();
        }

        public function contarUsuario($usuario) {
            $builder= $this->db->table('t_usuario');
            $count = $builder->select('usuario')
                            ->where('usuario', $usuario)
                            ->countAllResults();
            return $count;
        }
    }