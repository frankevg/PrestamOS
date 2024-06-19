<?php include_once 'includes/templates/header.php'; ?>
<?php include_once 'includes/templates/barra.php'; ?>

<style>
    header {
        position: relative;
    }
</style>

<?php include_once 'includes/templates/formulario.php';
?>
<main>

    <div class="background-info">
        <div class="informacion-contacto">
            <div class="informacion container">

                <div class="atencion">
                    <h2>ATENCIÓN AL CLIENTE</h2>
                    <div class="telefono columna">
                        <div class="icono">
                            <img src="/icon/Web/tel.png" alt="">
                        </div>
                        <div class="info">
                            <h3>OFICINA CENTRAL</h3>
                            <p>997-837-003</p>
                        </div>
                    </div>

                    <div class="correo columna">
                        <div class="icono">
                            <img src="/icon/Web/mail.png" alt="">
                        </div>
                        <div class="info ">
                            <h3>ESCRÍBENOS</h3>
                            <p>numero</p>
                        </div>
                    </div>

                    <div class="whatsapp columna">
                        <div class="icono">
                            <img src="/icon/Web/wsp.png" alt="">
                        </div>
                        <div class="info">
                            <h3>ATENCIÓN POR WHATSAPP</h3>
                        </div>
                    </div>
                </div>


                <div class="comercial">

                    <h2>INFORMACIÓN COMERCIAL</h2>

                    <div class="telefono columna">
                        <div class="icono ">
                            <img src="/icon/Web/tel.png" alt="">
                        </div>
                        <div class="info">
                            <div class="telefono">
                                <h3>VENTAS</h3>
                                <p>7875-4603</p>
                            </div>
                        </div>
                    </div>

                    <div class="whatsapp  columna">
                        <div class="icono">
                            <img src="/icon/Web/wsp.png" alt="">
                        </div>
                        <div class="info">
                            <h3>VENTAS POR WHATSAPP</h3>
                        </div>
                    </div>

                </div>
            </div>


            <div class="informacion container">
                <div class="ubicacion">
                    <h2>NUESTRA OFICINA</h2>
                    <div class="lugar  columna">
                        <div class="icono">
                            <img src="/icon/Web/location.png" alt="">
                        </div>
                        <div class="info">
                            <div class="direccion">
                                <h3>CALLE Abutardas Mz E Lote 3 </h3>
                                <h3>URB. Miguel Grau </h3>
                                <h3>SANTA ANITA</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="map" class="mapa">
                    <!-- DIV MAPA -->
                </div>

            </div>

        </div>
    </div>


</main>



<?php include_once 'includes/templates/footer.php'; ?>