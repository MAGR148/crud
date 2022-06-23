<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de Películas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg" style="background-color: #8F4CF5 ;">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo base_url().'/inicio'?>">
        <img src="<?php echo base_url('/images/palomitas.png')?>" alt="" width="60" height="48" class="d-inline-block align-text-top">
      </a>
        <a class="navbar-brand" style="color: white;" href="<?php echo base_url().'/inicio'?>">Bienvenido <?php echo session('nombre'); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="position: absolute;left: 95%; transform: translatex(-50%)">
              <li class="nav-item">
                <button class="btn btn-danger"><a class="nav-link active" style="color: white;" aria-current="page" href="<?php echo base_url('/salir') ?>">Salir</a></button>
              </li>
          </ul>
        </div>
    </div>
    </nav><br>
    <div class="container">
      <h1>Mundo pelis</h1>
      <div class="row">
        <div class="col-sm-12">
          <form method="POST" action="<?php echo base_url().'/crear'?>">
            <input type="hidden" name="idUsuario" value="<?php echo session('idUsuario'); ?>">
            <div class="form-floating">
              <input type="text" name="titulo" placeholder="Titulo de la película" id="titulo" class="form-control">
              <label for="titulo">Titulo de la película</label>
            </div><br>
            <div class="form-floating">
              <input type="number" name="anio" placeholder="Año de lanzamiento" id="anio" class="form-control">
              <label for="anio">Año de lanzamiento</label>
            </div><br>
            <div class="form-floating">
              <input type="text" name="idioma" placeholder="Idioma" id="idioma" class="form-control">
              <label for="idioma">Idioma original de la película</label>
            </div><br>
            <div class="form-floating">
              <select class="form-select" name="clasificacion" id="clasificacion" aria-label="Default select example">
                <option selected disabled>Elige una opción</option>
                <option value="AA">AA - Apto para todo público infantil</option>
                <option value="A">A - Apto para todo público</option>
                <option value="B">B - 12 años en adelante</option>
                <option value="C">C - 18 años en adelante</option>
                <option value="D">D - Solo para adultos</option>
              </select>
              <label for="clasificacion">Clasificación</label>
            </div><br>
            <div class="form-floating">
              <textarea class="form-control" placeholder="Sinopsis de la película" name="sinopsis" id="sinopsis" style="height: 100px"></textarea>
              <label for="sinopsis">Sinopsis</label>
            </div><br>
            <button class="btn btn-primary">Guardar</button>
          </form>
        </div>
      </div>
      <hr>
      <a class="navbar-brand" >
        <img src="<?php echo base_url('/images/3d.png')?>" alt="" width="80" height="48" class="d-inline-block align-text-top">
      </a>
      <h2 class="d-inline-block align-text-top">Listado de películas</h2>
      <a class="navbar-brand" >
        <img src="<?php echo base_url('/images/3d.png')?>" alt="" width="80" height="48" class="d-inline-block align-text-top">
      </a><br><br>
      <div class="row">
        <div class="col-sm-12">
          <div class="table table-responsive">
            <table class="table table-striped table-bordered">
              <tr>
                <th>Título</th>
                <th>Año</th>
                <th>Idioma</th>
                <th>Clasificación</th>
                <th>Sinopsis</th>
                <th colspan="2">Acciones</th>
              </tr>
              <?php foreach($datos as $key): ?>
                <tr>
                  <td><?php echo $key->titulo  ?></td>
                  <td><?php echo $key->anio  ?></td>
                  <td><?php echo $key->idioma  ?></td>
                  <td><?php echo $key->clasificacion  ?></td>
                  <td><?php echo $key->sinopsis  ?></td>
                  <td>
                    <a href="<?php echo base_url().'/obtenerPeli/'.$key->id_pelicula ?>" class="btn btn-warning">Actualizar</a>
                  </td>
                  <td>
                    <a href="<?php echo base_url().'/eliminarPeli/'.$key->id_pelicula?>" class="btn btn-danger">Eliminar</a>
                  </td>
                </tr>
              <?php  endforeach;?>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
      let mensaje = '<?php echo $mensaje ?>';
      if(mensaje == '1'){
        swal(':D', '¡Película insertada con éxito!', 'success');
      }else if(mensaje == '0'){
        swal(':(', '¡Película no insertada!', 'error');
      }else if(mensaje == '2'){
        swal(':)', '¡Película actualizada correctamente!', 'success');
      }else if(mensaje == '3'){
        swal(':c', '¡Fallo al actualizar!', 'error');
      }else if(mensaje == '4'){
        swal(':)', '¡Película eliminada correctamente!', 'success');
      }else if(mensaje == '5'){
        swal(':c', '¡Fallo al eliminar!', 'error');
      }else if(mensaje == '6'){
        swal(':D', '¡Bienvenido!', 'success');
      }
      
    </script>
  </body>
</html>