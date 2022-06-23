<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h1>Peli Plus</h1>
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
            <div class="col-sm-4"></div>
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