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
                    <h2>Complete el formulario de registro</h2>
                   
                    <div class="two-row">
                        <div class="one-row">
                            <label class="nombre" for="nombre">Nombre</label>
                            <input type="text" id="nombre" placeholder="Escribe tu nombre" name="nombre"  maxlength="25" required>
                        </div>
                        <div class="one-row">
                            <label for="apellido">Apellido</label>
                            <input type="text" id="apellido" placeholder="Escribe tu apellido" name="apellido"  maxlength="25" required>
                        </div>
                    </div>
                    <div class="two-row">
                        <div class="one-row">
                            <label for="email">E-mail </label>
                            <input type="email" id="email" placeholder="Escribe tu correo electrónico" name="email" maxlength="60" required>

                        </div>
                        <div class="one-row">
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" placeholder="Escribe tu contraseña" name="password" required>
                        </div>
                    </div>
                    <div class="two-row">                      
                        <div class="one-row">
                            <label for="tel">Teléfono</label>
                            <input type="tel" id="telefono" placeholder="Tu teléfono" name="telefono" pattern="[0-9]{9}" title="Por favor, ingrese exactamente 9 dígitos." required>
                        </div>
                        <div class="one-row">
                            <label for="ruc">RUC</label>
                            <input type="ruc" id="ruc" placeholder="Tu nro. de RUC" name="ruc" pattern="[0-9]{11}" title="Por favor, ingrese exactamente 11 dígitos." required>
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
                            <input type="text" id="document_num" placeholder="Escribe el nro. de documento" name="document_num"  title="Por favor, ingrese un número de documento válido" required>
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
                            <input type="text" id="direccion" placeholder="Escribe tu dirección exacta" name="direccion" maxlength="60" required>
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

