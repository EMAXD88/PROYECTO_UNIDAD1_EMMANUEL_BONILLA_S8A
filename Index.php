<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <style>
    .gradient-custom {
      background: linear-gradient(to right, #A0C3D2 0%, #FFCEFE 100%);
    }
  </style>
</head>

<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-4 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Ingresa tus datos para iniciar el sistema</p>
                <form action="validar.php" method="post">
                  <div class="form-outline form-white mb-4">
                    <input type="text" name="usuario" class="form-control form-control-lg" />
                    <label class="form-label text-white" for="typeEmailX">Usuario</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" name="password" class="form-control form-control-lg" />
                    <label class="form-label text-white" for="typePasswordX">Contraseña</label>
                  </div>

                  <button class="btn btn-outline-light btn-lg px-5" type="submit">Iniciar sesión</button>

                </form>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php

if(isset($_GET['error'])){
    $error=$_GET['error'];
    if($error=="INCORRECTO"){
            echo "<script> alert('ERROR DATOS INVALIDOS'); </script>";
    } if($error=="VACIO"){
            echo "<script> alert('ERROR DATOS VACIOS'); </script>";
    }
}


?>

</body>

</html>
