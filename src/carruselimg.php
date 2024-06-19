<?php
include_once 'db-functions\database.php';

$query = "SELECT * FROM `imagenes` WHERE id='carrusel-imagenes'";
$resultado = mysqli_query($conn, $query);

while ($consulta = mysqli_fetch_assoc($resultado)) :
?>
    <?php
    $ruta = $consulta['ruta'];
    // echo $ruta; 
    ?>
    <div class="gallery-cell">
        <a href="/solicitar.php">
            <img src="<?php echo $ruta; ?>" alt="">
        </a>
    </div>
<?php endwhile; ?>