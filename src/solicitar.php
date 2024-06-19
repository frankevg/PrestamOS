<?php include_once 'includes/templates/header.php'; ?>
<?php include_once 'includes/templates/barra.php'; ?>

<style>
    header {
        position: relative;
    }
</style>
<div class="formulario solicitude">
    <div class="contenedor">
        <form class="solicitar" action="/db-functions/connect-solicitar.php" method="post">
            <fieldset name="solicitar" value="true">
                <h1>¡ME INTERESA!</h1>
                <h2>Elige una opción</h2>

                <div class="tipocliente">
                    <label for="hogar">Personal</label>
                    <input type="radio" name="tipo_cliente" value="Hogar" id="Hogar" required>

                    <label for="empresa">Empresa</label>
                    <input type="radio" name="tipo_cliente" value="Empresa" id="Empresa" required>
                </div>

                <!-- <div class="one-row">
                    <label for="planes">Plan</label>
                    <select id="planes" name="plan" required>
                        <option value="" disabled selected>Seleccione plan </option>
                        <option value="50">Plan de 50 mbps</option>
                        <option value="80">Plan de 80 mbps</option>
                        <option value="100">Plan de 100 mbps</option>
                        <option value="150">Plan de 150 mbps</option>
                        <option value="200">Plan de 200 mbps</option>
                        <option value="300">Plan de 300 mbps</option>

                    </select>
                </div> -->
                <div class="two-row">
                    <div class="one-row">
                        <label class="nombre" for="nombre">Nombre</label>
                        <input type="text" id="nombre" placeholder="Escribe tu nombre" name="nombre" required>
                    </div>
                    <div class="one-row">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" placeholder="Escribe tu apellido" name="apellido" required>
                    </div>
                </div>
                <div class="two-row">
                    <div class="one-row">
                        <label for="email">E-mail </label>
                        <input type="email" id="email" placeholder="Escribe tu correo electrónico" name="email" required>

                    </div>
                    <div class="one-row">
                        <label for="tel">Teléfono</label>
                        <input type="tel" id="telefono" placeholder="Tu teléfono" name="telefono" required>
                    </div>
                </div>
                <div class="two-row">
                    <div class="one-row"><label for="document_type">Tipo de documento</label>
                        <select id="document_type" name="document_type" required>
                            <option value="" disabled selected>Seleccione tipo de documento</option>
                            <option value="dni">DNI</option>
                            <option value="CE">Carné de Extranjería</option>
                            <option value="pasaporte">Pasaporte</option>
                        </select>
                    </div>
                    <div class="one-row"> <label for="document_num">Número de documento</label>
                        <input type="text" id="document_num" placeholder="Escribe el nro. de documento" name="document_num" required>
                    </div>
                </div>
                <div class="two-row">
                    <div class="one-row"><label for="distrito">Distrito</label>
                        <select id="distrito" name="distrito" required>
                            <option value="" disabled selected>Seleccione su distrito</option>

                            <option value="El Agustino">El Agustino</option>
                            <option value="Santa Anita">Santa Anita</option>
                            <option value="Ate">Ate</option>
                        </select>
                    </div>
                    <div class="one-row">
                        <label for="direccion">Dirección</label>
                        <input type="text" id="direccion" placeholder="Escribe tu dirección exacta" name="direccion" required>
                    </div>
                </div>
            </fieldset>
            <div class="button">
                <input type="submit" value=" ¡LISTO! " class="boton">
            </div>
        </form>
    </div>

</div>

<?php include_once 'includes/templates/footer.php'; ?>