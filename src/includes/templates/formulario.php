<div class="contacto">
    <div class="encabezado">
        <h2>Confianza y apoyo financiero</h2>
        <h3>TE CONTACTAMOS</h3>

    </div>

    <div class="formulario">
        <div class="contenedor">

            <form class="solicitar" action="db-functions/connect-formulario.php" method="post">
                <fieldset>
                    <h1>¡Cada vez más cerca!</h1>
                    <h2>Bríndanos los siguientes datos</h2>
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

</div>