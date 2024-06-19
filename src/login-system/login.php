<?php
require '../db-functions/database.php';
$errores = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = mysqli_real_escape_string($conn, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if (!$email) {
        $errores[] = "El email es obligatorio o no es válido";
    }
    if (!$password) {
        $errores[] = "El password es obligatorio";
    }
    if (empty($errores)) {
        $query = "SELECT * FROM users WHERE email='${email}'";
        $resultado = mysqli_query($conn, $query);
        var_dump($resultado);


        if ($resultado->num_rows) {
            //Revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);
            $auth = password_verify($password, $usuario['password']);
            var_dump($auth);

            if ($auth) {
                //El usuario se autentifica
                session_start();
                //Lenar el arreglo de la sesion
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;
                echo "<pre>";
                echo var_dump($_SESSION);
                echo "</pre>";
                header('Location:../admin/dashboard/dashboard.php');
            } else {
                $errores[] = 'El password es incorrecto';
            }
        } else {
            $errores[] = "El usuario no existe";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prestamos - Confianza y apoyo financiero</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="/icon/icon.svg" type="image/x-icon" sizes="32x32">

    <!--bootstrap4 library linked-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


    <style type="text/css">
        .registration-form {
            background: #f7f7f7;
            padding: 20px;
            border: 1px solid orange;
            margin: 50px 0px;
        }

        .err-msg {
            color: red;
        }

        .registration-form form {
            border: 1px solid #e8e8e8;
            padding: 10px;
            background: #f3f3f3;
        }
    </style>
</head>

<body>
    <style>
        body {
            vertical-align: center;
            background-image: url(/img/formulario/SOLICITAR.jpg);
            background-repeat: no-repeat, repeat;
            background-attachment: fixed;
            background-position: center;
            height: 100%;
        }
    </style>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">

                    <!--====registration form====-->
                    <div class="registration-form  ">
                        <img src="/img/logotrans.png" alt="">

                        <?php foreach ($errores as $error) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error; ?>
                            </div>
                        <?php endforeach; ?>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" placeholder="Enter password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary" value="login" name="register">Login</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>