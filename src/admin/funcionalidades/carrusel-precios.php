<div class="contenedor">
    <form class="carrusel_admin" action="../db/connect-carrusel-precios.php" method="post">
        <fieldset name="carrusel-precios" value="true">
            <div class="one-row">
                <label for="orden">ORDEN(n)</label>
                <select id="orden" name="orden" required>
                    <option value="" disabled selected>Seleccione orden del plan</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
            <div class="two-row">
                <div class="one-row">
                    <label class="velocidad" for="velocidad">VELOCIDAD(n)</label>
                    <input type="number" id="velocidad" placeholder="Escribe la velocidad" name="velocidad" required>
                </div>
                <div class="one-row">
                    <label for="tarifa_plana">TARIFA PLANA(n)</label>
                    <input type="number" id="tarifa_plana" placeholder="Escribe el precio de la tarifa plana" name="tarifa_plana" required>
                </div>
            </div>
            <div class="two-row">
                <div class="one-row">
                    <label for="tarifa_promo">TARIFA DE PROMOCIÓN(n) </label>
                    <input type="number" id="tarifa_promo" placeholder="Escribe la tarifa de promoción" name="tarifa_promo" required>

                </div>
                <div class="one-row">
                    <label for="costo_inst">COSTO DE INSTALACIÓN(t)</label>
                    <input type="text" id="costo_inst" placeholder="Escribe el costo de instalación" name="costo_inst" required>
                </div>
            </div>
            <div class="two-row">
                <div class="one-row">
                    <label for="incluye">INCLUYE(t)</label>
                    <input type="text" id="incluye" placeholder="Escribe descripción" name="incluye" required>
                </div>
            </div>

        </fieldset>
        <div class="button">
            <input type="submit" value=" ¡LISTO! " class="boton">
        </div>
    </form>
</div>
<?php include_once '../db/tabla-carrusel-precios.php'; ?>