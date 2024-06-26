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
                    <label for="Personal">Personal</label>
                    <input type="radio" name="tipo_cliente" value="Personal" id="Personal" required>

                    <label for="empresa">Empresa</label>
                    <input type="radio" name="tipo_cliente" value="Empresa" id="Empresa" required>
                </div>


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
                            <option value="Ancón">Ancón</option>
                            <option value="Ate">Ate</option>
                            <option value="Barranco">Barranco</option>
                            <option value="Breña">Breña</option>
                            <option value="Carabayllo">Carabayllo</option>
                            <option value="Chaclacayo">Chaclacayo</option>
                            <option value="Chorrillos">Chorrillos</option>
                            <option value="Cieneguilla">Cieneguilla</option>
                            <option value="Comas">Comas</option>
                            <option value="El Agustino">El Agustino</option>
                            <option value="Independencia">Independencia</option>
                            <option value="Jesús María">Jesús María</option>
                            <option value="La Molina">La Molina</option>
                            <option value="La Victoria">La Victoria</option>
                            <option value="Lima">Lima</option>
                            <option value="Lince">Lince</option>
                            <option value="Los Olivos">Los Olivos</option>
                            <option value="Lurigancho">Lurigancho</option>
                            <option value="Lurín">Lurín</option>
                            <option value="Magdalena del Mar">Magdalena del Mar</option>
                            <option value="Miraflores">Miraflores</option>
                            <option value="Pachacámac">Pachacámac</option>
                            <option value="Pucusana">Pucusana</option>
                            <option value="Pueblo Libre">Pueblo Libre</option>
                            <option value="Puente Piedra">Puente Piedra</option>
                            <option value="Punta Hermosa">Punta Hermosa</option>
                            <option value="Punta Negra">Punta Negra</option>
                            <option value="Rímac">Rímac</option>
                            <option value="San Bartolo">San Bartolo</option>
                            <option value="San Borja">San Borja</option>
                            <option value="San Isidro">San Isidro</option>
                            <option value="San Juan de Lurigancho">San Juan de Lurigancho</option>
                            <option value="San Juan de Miraflores">San Juan de Miraflores</option>
                            <option value="San Luis">San Luis</option>
                            <option value="San Martín de Porres">San Martín de Porres</option>
                            <option value="San Miguel">San Miguel</option>
                            <option value="Santa Anita">Santa Anita</option>
                            <option value="Santa María del Mar">Santa María del Mar</option>
                            <option value="Santa Rosa">Santa Rosa</option>
                            <option value="Santiago de Surco">Santiago de Surco</option>
                            <option value="Surquillo">Surquillo</option>
                            <option value="Villa El Salvador">Villa El Salvador</option>
                            <option value="Villa María del Triunfo">Villa María del Triunfo</option>                       
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