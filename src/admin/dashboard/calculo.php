<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/menu.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    


    <div class="container contenedor">
        <h1 class="mt-4 mb-3">Calculadora de Préstamo</h1>
        <form method="post" action="calculo.php">
            <div class="form-group mb-3">
                <label for="prestamo">Préstamo:</label>
                <input type="number" id="prestamo" name="prestamo" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="cuota_inicial">Cuota Inicial (%):</label>
                <input type="number" id="cuota_inicial" name="cuota_inicial" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="tea">TEA (%):</label>
                <input type="number" id="tea" name="tea" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="plazo">Plazo (años):</label>
                <input type="number" id="plazo" name="plazo" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="frecuencia">Frecuencia (Cantidad de veces por año):</label>
                <input type="number" id="frecuencia" name="frecuencia" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>


<?php include_once 'templates/footer.php'; ?>
