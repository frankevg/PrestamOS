<?php
// include '../../db-functions/funciones.php';
// $auth = estaAuntenticado();
// if (!$auth) {
//     header('Location:/');
// }
?>
<?php
include_once 'databaseadmin.php';
$query = "SELECT * FROM `carrusel-servicios`";
$resultado = mysqli_query($conn, $query);
?>
<table>
    <thead>
        <tr>
            <th>ORDEN</th>
            <th>VELOCIDAD (Mbps)</th>
            <th>TARIFA PLANA</th>
            <th>TARIFA PROMO</th>
            <th>COSTO DE INSTALACIÓN</th>
            <th>INCLUYE</th>
    </thead>
    <tbody>
        <?php while ($consulta = mysqli_fetch_assoc($resultado)) :
        ?>
            <tr>
                <td><?php echo $consulta['orden']; ?></td>
                <td><?php echo $consulta['velocidad']; ?></td>
                <td><?php echo $consulta['tarifa_plana']; ?></td>
                <td><?php echo $consulta['tarifa_promo']; ?></td>
                <td><?php echo $consulta['costo_inst']; ?></td>
                <td><?php echo $consulta['incluye']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>