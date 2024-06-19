<?php include_once 'includes/templates/header.php'; ?>
<?php include_once 'includes/templates/barra.php'; ?>
<style>
    html {
        background-color: #74EBD5;
        background-image: linear-gradient(90deg, #74EBD5 0%, #9FACE6 100%);
    }
</style>
<div class="bajo-construccion">
    <div class="encabezado-construccion">
        <h2> ¡UPPS!</h2>
        <h2> ¡SITIO EN CONSTRUCCIÓN!</h2>
    </div>


    <?php
    $imagenes = ['rand_img_1.jpg', 'rand_img_2.jpg', 'rand_img_3.jpg', 'rand_img_4.jpg'];
    $i = rand(0, (count($imagenes) - 1));
    echo '<img src="' . '/img/underconstruction/' . $imagenes[$i] . '">';
    ?>
    <div class="encabezado-construccion">
        <p>Estamos trabajando </p>
        <p>para brindarte un mejor servicio</p>
    </div>

</div>


<?php include_once 'includes/templates/footer.php'; ?>