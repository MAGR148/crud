<?php namespace App\Models;

    use CodeIgniter\Model;

    class Peliculas extends Model {

        public function listarPelicula($usuario) {
            $peliculas = $this->db->query("SELECT * from t_peliculas WHERE id_usuario = ".$usuario);
            return $peliculas->getResult();
        }

        public function insertar($datos){
            $peliculas = $this->db->table('t_peliculas');
            $peliculas->insert($datos);

            return $this->db->insertID();
        }

        public function obtenerPeli($data){
            $pelicula = $this->db->table('t_peliculas');
            $pelicula->where($data);
            return $pelicula->get()->getResultArray();
        }

        public function actualizarPeli($data, $idPeli){
            $pelicula = $this->db->table('t_peliculas');
            $pelicula->set($data);
            $pelicula->where('id_pelicula', $idPeli);
            return $pelicula->update();
            
        }

        public function eliminarPeli($idPeli){
            $pelicula = $this->db->table('t_peliculas');
            $pelicula->where('id_pelicula', $idPeli);
            return $pelicula->delete();
            
        }

        
    }