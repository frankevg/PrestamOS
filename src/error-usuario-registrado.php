

<?php include_once 'includes/templates/header.php'; ?>
<?php include_once 'includes/templates/barra.php'; ?>
<style>
    html {
        background-color: #e06666;
        background-image: linear-gradient(90deg, #e06666 0%, #e23b3b 100%);
    }
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
        <p>El usuario ya se encuentra registrado en la base de datos.</p>

    </div>
   


</div>

<div class="contador" id="contador"></div>
<script>

       // Definimos el número inicial de segundos
       let segundos = 4;

// Función para actualizar el contador cada segundo
function actualizarContador() {
    // Mostramos el número actual de segundos
    document.getElementById("contador").innerHTML = segundos;

    // Reducimos los segundos en 1
    segundos--;

    // Si los segundos llegan a 0, mostramos un mensaje y detenemos el contador
    if (segundos < 0) {
        clearInterval(intervalo);
        document.getElementById("contador").innerHTML = "¡Redirigiendo!";
    }
}

// Llamamos a la función inicialmente para que se muestre el primer segundo
actualizarContador();

// Actualizamos el contador cada segundo (1000 milisegundos)
let intervalo = setInterval(actualizarContador, 1000);
    // Cambiar el título de la página para simular carga
    document.title = "Cargando...";

    // Redirigir a la página principal después de 3 segundos
    setTimeout(function() {
        window.location.href = '../../';
    }, 5000); // 3000 milisegundos = 3 segundos
    
   
    
</script>



<?php include_once 'includes/templates/footer.php'; ?>


