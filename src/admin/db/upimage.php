<?php
include_once 'databaseadmin.php';
$query = "SELECT * FROM `carrusel-servicios`";
$resultado = mysqli_query($conn, $query);

$imagen = $_FILES['image'];

// Ejecutar el código después de que el usuario envia el formulario
// if ($_resultado ['REQUEST_METHOD' ] === 'POST') {
//     echo "<pre>" ;
//     var_dump ($_POST) ;
//     echo "</pre>" ;
//     echo "<pre>" ;
//     var_dump ($_FILES) ;
//     echo "</pre>" ; I
//     exit;
// }
