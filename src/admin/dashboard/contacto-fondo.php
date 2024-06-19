<?php include_once 'templates/header.php'; ?>

<?php include_once 'templates/menu.php'; ?>
<?php
include_once '../db/databaseadmin.php';
$query = "SELECT * FROM `imagenes` WHERE id='contacto-fondo-imagen'";
$resultado = mysqli_query($conn, $query);

if ($consulta = mysqli_fetch_assoc($resultado)) {
    $ruta = $consulta['ruta'];
    $nombreimg = $consulta['nombreimagen'];
} ?>
<!-- <div class="content"> -->


<h2>MODIFICAR IMAGEN</h2>

<!-- writing the form -->
<form action="" method="POST" enctype="multipart/form-data">
    <!-- enctype set to multipart/form-data is mandatory when we deal with files -->

    <label>Escoge una imagen</label>
    <input type="hidden" name="id" value="<?php echo $nombreimg; ?>">
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
            include_once '../db/databaseadmin.php';

            $id = 'contacto-fondo-imagen';

            if ($conn->connect_errno) {
                die('Conection Failed:' . $conn->connect_errno);
            } else {
                // Generar un nombre único
                $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
                $path = "../../img/formulario/{$nombreImagen}";

                move_uploaded_file($imagen['tmp_name'], $path);


                $idimg = $_POST['id'];
                // Eliminar la propiedad
                $query = " DELETE FROM `imagenes` WHERE nombreimagen= '{$idimg}'";
                $resultado_delete = mysqli_query($conn, $query);
                unlink("../../img/formulario/{$idimg}");

                $stmt = $conn->prepare('INSERT INTO imagenes (id,nombreimagen,ruta) VALUES (?,?,?)');
                $stmt->bind_param("sss", $id, $nombreImagen, $path);
                $stmt->execute();
                $stmt->close();

                header("Refresh:0");
                exit;
            }
        }
    }
}
?>

<div class="content">
    <div class="min-img">
        <img src="<?php echo $ruta; ?>" alt="">
    </div>
</div>


<?php include_once 'templates/footer.php'; ?>