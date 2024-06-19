<?php include_once 'templates/header.php'; ?>

<?php include_once 'templates/menu.php'; ?>


<?php include_once '../db/subir-imagen.php';
?>

<?php

//MOSTRAR IMÁGENES QUE SE VISUALIZAN

include_once '../db/databaseadmin.php';
$query = "SELECT * FROM `imagenes` WHERE id='carrusel-imagenes'";
$resultado = mysqli_query($conn, $query);

while ($consulta = mysqli_fetch_assoc($resultado)) :
?>
    <?php
    $ruta = $consulta['ruta'];
    $nombreimg = $consulta['nombreimagen'];
    ?>
    <div class="content">
        <div class="min-img">
            <img src="<?php echo $ruta; ?>" alt="">
            <form action="" method="POST">
                <input type="hidden" name="id" value="<?php echo $nombreimg; ?>">
                <input type="submit" name="upload" value="Eliminar">
            </form>
        </div>
    </div>
<?php endwhile; ?>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        // Eliminar la propiedad
        $query = " DELETE FROM `imagenes` WHERE nombreimagen= '{$id}'";
        $resultado_delete = mysqli_query($conn, $query);

        unlink("../../img/carrusel/{$id}");

        // if (isset($resultado_delete)) {
        //     header(' Location : /admin/dashboard/portada.php ');
        // }
        header("Refresh:0");
        exit;
    }
}
?>


<?php include_once 'templates/footer.php'; ?>