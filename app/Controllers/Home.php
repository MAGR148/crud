<?php namespace App\Controllers;

use App\Models\Usuarios;

class Home extends BaseController
{
    public function index()
    {
        $mensaje = session('mensaje');
        return view('login', ["mensaje" => $mensaje]);
    }

    public function inicio()
    {
        return view('inicio');
    }

    //Método para hacer login
    public function login()
    {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        $Usuario = new Usuarios();

        $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

        if(count($datosUsuario) > 0 && 
            password_verify($password, $datosUsuario[0]['password'])){
                
                $data = [
                    "idUsuario" => $datosUsuario[0]['id_usuario'],
                    "usuario" => $datosUsuario[0]['usuario'],
                    "type" => $datosUsuario[0]['type']
                ];
                $session = session();
                $session->set($data);
                return redirect()->to(base_url('/inicio'))->with('mensaje', '1');

        }else{
            return redirect()->to(base_url('/'))->with('mensaje', '0');
        }

    }

    //Método para el logout
    public function salir()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));

    }

    //----------------------------------------Métedos para el CRUD de peliculas----------------------------------------------------------

    //Método para crear pelicula


    //Método para actualizar pelicula


}
