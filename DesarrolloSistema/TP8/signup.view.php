<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 offset-md-4">
                <form action="signup.php" method="post" class="modal-content animate">
                    
                    <div class="col-md-3 offset-md-4">
                      <img src="#" alt="Avatar" class="avatar">
                    </div>

                    <label for="uname" class ="form-label"><b>Nombre</b></label>
                    <input type="text" placeholder="ingresar nombre" name="uname" required>
           
                    <label for="apel" class ="form-label"><b>Apellido</b></label>
                    <input type="text" placeholder="ingresar apellido" name="apel" required>

                    <label for="fecnac" class ="form-label"><b>Fecha de nacimiento</b></label>
                    <input type="date" placeholder="(AAAA-MM-DD))" name="fecnac" required>
           
                    <label for="email" class ="form-label"><b>Email</b></label>
                    <input type="email" placeholder="ingresar email" name="email" required>

                    <label for="psw" class ="form-label"><b>Contraseña</b></label>
                    <input type="password" placeholder="ingresar contraseña" name="psw" required>
           
                    <button class="btn btn-primary" type="submit">Sign up</button>
           
               </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>