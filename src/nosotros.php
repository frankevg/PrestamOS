<?php include_once 'includes/templates/header.php'; ?>
<?php include_once 'includes/templates/barra.php'; ?>
<?php
include_once 'db-functions/database.php'; ?>

<div class="nosotros container">
    <section>
        <?php
        $query = 'SELECT * FROM `nosotros` WHERE id="historia"';
        $resultado = mysqli_query($conn, $query);
        $consulta = mysqli_fetch_assoc($resultado);
        $historia = $consulta['contenido'];

        $queryimg = "SELECT * FROM `imagenes` WHERE id='historia-imagen'";
        $resultadoimg = mysqli_query($conn, $queryimg);
        $consultaimg = mysqli_fetch_assoc($resultadoimg);
        $ruta = $consultaimg['ruta'];
        ?>
    </section>
    <section>
        <?php
        $query = 'SELECT * FROM `nosotros` WHERE id="quees"';
        $resultado = mysqli_query($conn, $query);
        $consulta = mysqli_fetch_assoc($resultado);
        $quees = $consulta['contenido'];

        $queryimg = "SELECT * FROM `imagenes` WHERE id='quees-imagen'";
        $resultadoimg = mysqli_query($conn, $queryimg);
        $consultaimg = mysqli_fetch_assoc($resultadoimg);
        $ruta = $consultaimg['ruta'];
        ?>
        <div class="content2">
            <h2>¿Qué es Prestamos?</h2>
            <div class="two-row">
                <div class="one-row">
                    <p><?php echo $quees; ?>
                    <p>
                </div>
                <div class="one-row">
                    <img src="<?php echo $ruta; ?>" alt="Historia2">
                </div>
            </div>


        </div>
    </section>
    <section>
        <?php
        $query = 'SELECT * FROM `nosotros` WHERE id="vision"';
        $resultado = mysqli_query($conn, $query);
        $consulta = mysqli_fetch_assoc($resultado);
        $vision = $consulta['contenido'];

        $queryimg = "SELECT * FROM `imagenes` WHERE id='vision-imagen'";
        $resultadoimg = mysqli_query($conn, $queryimg);
        $consultaimg = mysqli_fetch_assoc($resultadoimg);
        $ruta = $consultaimg['ruta'];
        ?>

        <div class="content3">
            <h2>Visión</h2>
            <div class="two-row">
                <div class="one-row">
                    <img src="<?php echo $ruta; ?>" alt="Historia3">
                </div>
                <div class="one-row">
                    <p><?php echo $vision; ?>
                    <p>
                </div>
            </div>


        </div>
    </section>
    <section>
        <?php
        $query = 'SELECT * FROM `nosotros` WHERE id="mision"';
        $resultado = mysqli_query($conn, $query);
        $consulta = mysqli_fetch_assoc($resultado);
        $mision = $consulta['contenido'];

        $queryimg = "SELECT * FROM `imagenes` WHERE id='mision-imagen'";
        $resultadoimg = mysqli_query($conn, $queryimg);
        $consultaimg = mysqli_fetch_assoc($resultadoimg);
        $ruta = $consultaimg['ruta'];
        ?>
        <div class="content4">
            <h2>Misión</h2>
            <div class="two-row">
                <div class="one-row">
                    <p><?php echo $mision; ?>
                    <p>
                </div>
                <div class="one-row">
                    <img src="<?php echo $ruta; ?>" alt="Historia4">
                </div>
            </div>


        </div>
    </section>
</div>

<?php include_once 'includes/templates/footer.php'; ?>