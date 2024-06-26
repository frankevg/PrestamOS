<?php include_once 'includes/templates/header.php'; ?>
<?php include_once 'includes/templates/barra.php'; ?>
<style>
    html {
        background-color: #e06666;
        background-image: linear-gradient(90deg, #e06666 0%, #e23b3b 100%);
    }
</style>
</style>
<div class="bajo-construccion">
    <div class="encabezado-construccion">
        <h2> ¡Error!</h2>
    </div>


    <?php
    $imagenes = ['rand_img_1.jpg', 'rand_img_2.jpg', 'rand_img_3.jpg', 'rand_img_4.jpg'];
    $i = rand(0, (count($imagenes) - 1));
    echo '<img src="' . '/img/underconstruction/' . $imagenes[$i] . '">';
    ?>
    <div class="encabezado-construccion">
        <p>Vuelve a completar los datos de registro</p>

    </div>

</div>


<?php include_once 'includes/templates/footer.php'; ?>