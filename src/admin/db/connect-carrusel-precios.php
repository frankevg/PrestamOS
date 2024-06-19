<?php
// include '../../db-functions/funciones.php';
// $auth = estaAuntenticado();
// if (!$auth) {
//     header('Location:/');
// }
?>
<?php
include_once 'databaseadmin.php';
echo "connection successfully";

$orden = $_POST['orden'];
$velocidad = $_POST['velocidad'];
$tarifa_plana = $_POST['tarifa_plana'];
$tarifa_promo = $_POST['tarifa_promo'];
$costo_inst = $_POST['costo_inst'];
$incluye = $_POST['incluye'];

if ($conn->connect_errno) {
    die('Conection Failed:' . $conn->connect_errno);
} else {

    $stmt = $conn->prepare('UPDATE `carrusel-servicios`SET velocidad = ?, tarifa_plana=?, tarifa_promo=?, costo_inst=?, incluye=? WHERE orden =?');
    $stmt->bind_param("iiissi", $velocidad, $tarifa_plana, $tarifa_promo, $costo_inst, $incluye, $orden);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();

    //$query = "UPDATE `carrusel-servicios`SET velocidad = '${velocidad}', tarifa_plana='${tarifa_plana}', tarifa_promo='${tarifa_promo}', costo_inst='${costo_inst}', incluye='${incluye}' WHERE orden = '${orden}'";
    //$resultado = mysqli_query($conn, $query);
    //var_dump($resultado);
    echo "resultado enviado correctamente";
    header('Location:../dashboard/planes.php');
}
