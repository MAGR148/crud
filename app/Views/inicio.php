<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de Películas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><?php echo session('usuario'); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url('/salir') ?>">Salir</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="container">
      <h1>CRUD Peliculas</h1>
      <div class="row">
        <div class="col-sm-12">
          <form method="POST" action="<?php echo base_url().'/crear'?>">
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
              <textarea class="form-control" placeholder="Sinopsis de la película" id="sinopsis" style="height: 100px"></textarea>
              <label for="sinopsis">Sinopsis</label>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>