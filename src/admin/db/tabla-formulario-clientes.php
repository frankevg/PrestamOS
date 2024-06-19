<?php
// include '../../db-functions/funciones.php';
// $auth = estaAuntenticado();
// if (!$auth) {
//     header('Location:/');
// }
?>
<?php
include_once 'databaseadmin.php';
$query = "SELECT * FROM `formulario`";
$resultado = mysqli_query($conn, $query);
?>
<table>
    <thead>
        <tr>
            <th class="column1">ID</th>
            <th class="column2">NOMBRE</th>
            <th class="column3">APELLIDO</th>
            <th class="column4">EMAIL</th>
            <th class="column5">TELÉFONO</th>
            <th class="column6">TIPO DE DOCUMENTO</th>
            <th class="column7">NÚMERO DE DOCUMENTO</th>
            <th class="column8">DISTRITO</th>
            <th class="column9">DIRECCIÓN</th>
            <th class="column10">PLAN</th>
            <th class="column11">TIPO CLIENTE</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($consulta = mysqli_fetch_assoc($resultado)) :
        ?>
            <tr>
                <td><?php echo $consulta['id']; ?></td>
                <td><?php echo $consulta['nombre']; ?></td>
                <td><?php echo $consulta['apellido']; ?></td>
                <td><?php echo $consulta['email']; ?></td>
                <td><?php echo $consulta['telefono']; ?></td>
                <td><?php echo $consulta['documento_type']; ?></td>
                <td><?php echo $consulta['documento_num']; ?></td>
                <td><?php echo $consulta['distrito']; ?></td>
                <td><?php echo $consulta['direccion']; ?></td>
                <td><?php echo $consulta['plan']; ?></td>
                <td><?php echo $consulta['tipo_cliente']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>

</table>