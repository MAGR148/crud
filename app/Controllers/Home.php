<?php namespace App\Controllers;

use App\Database\Seeds\Usuario;
use App\Models\Usuarios;
use App\Models\Peliculas;

class Home extends BaseController
{
    public function index()
    {
        $mensaje = session('mensaje');
        return view('login', ["mensaje" => $mensaje]);
    }

    //ver vista para registrar 
    public function registro()
    {
        $mensaje = session('mensaje');
        return view('formRegistro', ["mensaje" => $mensaje]);
    }

    //Registar Usuario
    public function registrarUsuario()
    {   
        $Usuario = new Usuarios();
        $pass = $_POST['password'];
        $pass1 = $_POST['password1'];
        $c = $Usuario->contarUsuario($_POST['usuario']);

        //Validación de contraseñas
        if($pass == $pass1){
            if($c == 0){
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $datos = [
                    "nombre" => $_POST['nombre'],
                    "a_paterno" => $_POST['a_paterno'],
                    "a_materno" => $_POST['a_materno'],
                    "usuario" => $_POST['usuario'],
                    "password" => $password,
                    "type" => $_POST['type']
                ];

                
                $respuesta = $Usuario->insertar($datos);

                if($respuesta > 0){
                    return redirect()->to(base_url().'/')->with('mensaje', '1');
                }else{
                    return redirect()->to(base_url().'/')->with('mensaje', '0');
                }
            }else{
                return redirect()->to(base_url().'/registro')->with('mensaje', '1');
            }
        }else{
            return redirect()->to(base_url().'/registro')->with('mensaje', '0');
        }
        
    }

    //Ver el listado de peliculas
    public function inicio()
    {
        $pelicula = new Peliculas();
        $datos = $pelicula->listarPelicula(session('idUsuario'));

        $mensaje = session('mensaje');

        $data = [
            "datos" => $datos,
            "mensaje" => $mensaje
        ];

        return view('inicio', $data);
    }

    //Método para hacer login
    public function login()
    {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        $Usuario = new Usuarios();

        $datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

        if(count($datosUsuario) > 0){
            if(password_verify($password, $datosUsuario[0]['password'])){
                $data = [
                    "idUsuario" => $datosUsuario[0]['id_usuario'],
                    "usuario" => $datosUsuario[0]['usuario'],
                    "type" => $datosUsuario[0]['type'],
                    "nombre" => $datosUsuario[0]['nombre']
                    
                ];
                $session = session();
                $session->set($data);
                return redirect()->to(base_url('/inicio'))->with('mensaje', '6');
            }else{
                return redirect()->to(base_url('/'))->with('mensaje', '3');
            }
        }else{
            return redirect()->to(base_url('/'))->with('mensaje', '2');
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
    public function crearPelicula()
    {
        $datos = [
            "titulo" => $_POST['titulo'],
            "anio" => $_POST['anio'],
            "idioma" => $_POST['idioma'],
            "clasificacion" => $_POST['clasificacion'],
            "sinopsis" => $_POST['sinopsis'],
            "id_usuario" => $_POST['idUsuario']
        ];
        $pelicula = new Peliculas();
        $respuesta = $pelicula->insertar($datos);

        if($respuesta > 0){
            return redirect()->to(base_url().'/inicio')->with('mensaje', '1');
        }else{
            return redirect()->to(base_url().'/inicio')->with('mensaje', '0');
        }
    }

    //Método para actualizar pelicula
    public function actualizarPelicula()
    {
        $datos = [
            "titulo" => $_POST['titulo'],
            "anio" => $_POST['anio'],
            "idioma" => $_POST['idioma'],
            "clasificacion" => $_POST['clasificacion'],
            "sinopsis" => $_POST['sinopsis'],
            //"id_pelicula" => $_POST['id_peli']
        ];
        $idPelicula = $_POST['id_peli'];
        $pelicula = new Peliculas();
        $respuesta = $pelicula->actualizarPeli($datos, $idPelicula);
        if($respuesta > 0){
            return redirect()->to(base_url().'/inicio')->with('mensaje', '2');
        }else{
            return redirect()->to(base_url().'/inicio')->with('mensaje', '3');
        }
    }

    //Método que trae la información para actualizar
    public function mostrarPelicula($idPelicula)
    {
        $data = ["id_pelicula" => $idPelicula];
        $pelicula = new Peliculas();
        $respuesta = $pelicula->obtenerPeli($data);

        $datos = ["datos" => $respuesta];

        return view('actualizar', $datos);

    }

    //Método que trae la información para actualizar
    public function eliminarPelicula($idPelicula)
    {
        $data = ["id_pelicula" => $idPelicula];
        $pelicula = new Peliculas();
        $respuesta = $pelicula->eliminarPeli($data);
        if($respuesta > 0){
            return redirect()->to(base_url().'/inicio')->with('mensaje', '4');
        }else{
            return redirect()->to(base_url().'/inicio')->with('mensaje', '5');
        }

    }

}
