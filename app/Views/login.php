<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg" style="background-color: #8F4CF5 ;">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo base_url().'/inicio'?>" style="color:white;">
            <img src="<?php echo base_url('/images/palomitas.png')?>" alt="" width="60" height="48" class="d-inline-block align-text-top"> Mundo Pelis
          </a>
        </div>
    </nav><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6" >
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?php echo base_url('/images/aquaman.jpg')?>" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo base_url('/images/godzilla.jpg')?>" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo base_url('/images/joker.jpg')?>" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Siguiente</span>
                </button>
              </div>
            </div>
            <div class="col-sm-6">
                <h1 style="color: #8F4CF5 ;">Peli Plus</h1>
                <form action="<?php echo base_url('/login') ?>" method="POST">
                <div class="form-floating">
                    <input type="email" name="usuario" placeholder="Nombre de usuario" id="usuario" class="form-control" required>
                    <label for="usuario">Correo de usuario</label>
                  </div><br>
                  <div class="form-floating">
                    <input type="password" name="password" placeholder="Contraseña" id="password" class="form-control" required>
                    <label for="password">Contraseña</label>
                  </div><br>
                    <a href="<?php echo base_url('/registro') ?>" class="link">Registrarme</a>
                    <br><br>
                    <button class="btn btn-primary">Entrar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      let mensaje = '<?php echo $mensaje ?>';
      if(mensaje == '1'){
        swal(':D', '¡Registro Exitoso!', 'success');
      }else if(mensaje == '0'){
        swal(':(', '¡No ha sido posible registarte!', 'error');
      }else if(mensaje == '2'){
        swal(':(', '¡Cuenta no encontrada!', 'error');
      }else if(mensaje == '3'){
        swal(':(', '¡Contraseña incorrecta!', 'error');
      }
      
    </script>
  </body>
</html>