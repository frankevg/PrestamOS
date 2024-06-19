<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/menu.php'; ?>


<div class="contenedor">
    <form class="faq_admin" action="../db/connect-faq.php" method="post">
        <fieldset name="faq" value="true">
            <div class="one-row">
                <label for="orden">ORDEN(n)</label>
                <select id="orden" name="orden" required>
                    <option value="" disabled selected>Seleccione orden de la pregunta</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="two-row">
                <div class="one-row">
                    <label class="pregunta" for="pregunta">PREGUNTA(n)</label>
                    <input type="text" id="pregunta" placeholder="Escribe la pregunta" name="pregunta" required>
                </div>
                <div class="one-row">
                    <label for="respuesta">RESPUESTA(n)</label>
                    <input type="text" id="respuesta" placeholder="Escribe el precio de la respuesta" name="respuesta" required>
                </div>
            </div>
        </fieldset>
        <div class="button">
            <input type="submit" value=" ¡LISTO! " class="boton">
        </div>
    </form>
</div>

<div class="faq">


    <?php
    include_once '../db/databaseadmin.php';
    $query = "SELECT * FROM `faq`";
    $resultado = mysqli_query($conn, $query);
    while ($consulta = mysqli_fetch_assoc($resultado)) :
    ?>
        <?php
        $orden = $consulta['orden'];
        $pregunta = $consulta['pregunta'];
        $respuesta = $consulta['respuesta'];

        ?>
        <div class="accordion-faq">
            <button class="accordion">

                <div class="pregunta">
                    <?php echo $pregunta ?>
                </div>

            </button>
            <div class="respuesta">
                <p><?php echo $respuesta ?></p>
            </div>
        </div>
    <?php endwhile; ?>



</div>


<?php include_once 'templates/footer.php'; ?>