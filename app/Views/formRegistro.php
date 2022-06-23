<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resgistrarme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Registrarse</h1>
                <form action="<?php echo base_url('/registrar') ?>" method="POST">
                <input type="hidden" name="type" value="admin">
                  <div class="form-floating">
                    <input type="text" name="nombre" placeholder="Nombre(s)" id="nombre" class="form-control">
                    <label for="nombre">Nombre(s)</label>
                  </div><br>
                  <div class="form-floating">
                    <input type="text" name="a_paterno" placeholder="Apellido paterno" id="a_paterno" class="form-control">
                    <label for="a_paterno">Apellido paterno</label>
                  </div><br>
                  <div class="form-floating">
                    <input type="text" name="a_materno" placeholder="Apellido materno" id="a_materno" class="form-control">
                    <label for="a_materno">Apellido materno</label>
                  </div><br>
                  <div class="form-floating">
                    <input type="email" name="usuario" placeholder="Nombre de usuario" id="usuario" class="form-control">
                    <label for="usuario">Correo de usuario</label>
                  </div><br>
                  <div class="form-floating">
                    <input type="password" name="password" placeholder="Contraseña" id="password" class="form-control">
                    <label for="password">Contraseña</label>
                  </div><br>
                  <div class="form-floating">
                    <input type="password" name="password1" placeholder="Confirmación de Contraseña" id="password1" class="form-control">
                    <label for="password1">Confirmación de contraseña</label>
                  </div><br>
                    <a href="<?php echo base_url().'/' ?>" class="btn btn-danger">Volver</a>
                    <button class="btn btn-success">Registrarme</button>
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
        swal(':D', '¡Este correo ya ha sido registrado!', 'error');
      }else if(mensaje == '0'){
        swal(':(', '¡Las contraseñas no coinciden!', 'error');
      }
    </script>
  </body>
</html>