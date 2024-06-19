<?php
// include '../../db-functions/funciones.php';
// $auth = estaAuntenticado();
// if (!$auth) {
//     header('Location:/');
// }

?>

<h2>SUBIR UNA IMAGEN</h2>

<!-- writing the form -->
<form action="" method="POST" enctype="multipart/form-data">
    <!-- enctype set to multipart/form-data is mandatory when we deal with files -->

    <label>Escoge una imagen</label>
    <input type="file" name="image">
    <input type="submit" name="upload" value="upload">

    <p class="error"><?php echo @$error ?></p> <!-- displaying any errors -->
    <p class="success"><?php echo @$success ?></p> <!-- displaying the success message -->
</form>
<?php

// SUBIR IMAGEN

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_FILES['image'])) {

        $imagen = $_FILES['image'];

        //Validar si se sube vacio
        if (!$imagen['name']) {
            $errores[] = 'La Imagen es obligatoria';
        }

        //Validar por tamaño (1MB)
        $medida = 1000 * 1000;
        if ($imagen['size'] > $medida) {
            $errores[] = 'La imagen es muy pesada';
        }

        // Revisar que el array de errores este vacio
        if (empty($errores)) {


            // Generar un nombre único
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
            $path = "../../img/carrusel/{$nombreImagen}";


            move_uploaded_file($imagen['tmp_name'], $path);


            include_once '../db/databaseadmin.php';

            $id = 'carrusel-imagenes';


            if ($conn->connect_errno) {
                die('Conection Failed:' . $conn->connect_errno);
            } else {

                $stmt = $conn->prepare('INSERT INTO imagenes (id,nombreimagen,ruta) VALUES (?,?,?)');
                $stmt->bind_param("sss", $id, $nombreImagen, $path);
                $stmt->execute();
                $stmt->close();
            }
            header("Refresh:0");
            exit;
        }
    }
}

?>