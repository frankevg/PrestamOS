<?php
require '../db-functions/database.php';
include '../db-functions/funciones.php';

$auth = estaAuntenticado();
var_dump($auth);
// if (!$auth) {
//     header('Location:/');
// }
?>
<?php
if ($conn->connect_errno) {
    die('Conection Failed:' . $conn->connect_errno);
} else {

    $query = 'SELECT (id,nombre,apellido,email,telefono,documento_type,documento_num,distrito,direccion,plan,tipo_cliente) FROM formulario';
}
echo var_dump($query);
?>






<table>
    <tr>
        <th>Company</th>
        <th>Contact</th>
        <th>Country</th>
    </tr>
    <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
    </tr>
    <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
    </tr>
</table>