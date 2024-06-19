<?php
include_once 'database.php';
$query = "SELECT * FROM `carrusel-servicios`";
$resultado = mysqli_query($conn, $query);
?>

<?php while ($consulta = mysqli_fetch_assoc($resultado)) : ?>
    <div class="plan gallery-cell">
        <div class="plan-info">
            <div class="velocidad">
                <h2><?php echo $consulta['velocidad']; ?> Mbps</h2>
                <p>INTERNET FIBRA ÓPTICA</p>
            </div>
            <div class="precio">
                <p>S/.<?php echo $consulta['tarifa_promo']; ?> </p>
            </div>
            <div class="promocion">
                <p>POR EL PRIMER MES</p>
                <p>S/.<?php echo $consulta['tarifa_plana']; ?> A PARTIR DEL</p>
                <P>SEGUNDO MES</P>
            </div>
            <div class="incluye">
                <h3>INCLUYE:</h3>
                <p><?php echo $consulta['incluye']; ?></p>
                <p><?php echo $consulta['costo_inst']; ?></p>
            </div>
            <div class="button-planes">

                <a href="/solicitar.php"> <input type="submit" value="LO QUIERO" class="boton"></a>
            </div>
        </div>
    </div>
<?php endwhile; ?>