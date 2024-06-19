<?php

include_once 'database.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$document_type = $_POST['document_type'];
$document_num = $_POST['document_num'];
$distrito = $_POST['distrito'];
$direccion = $_POST['direccion'];
$plan = "0";
$tipo_cliente = "No precisa";

if ($conn->connect_errno) {
    die('Conection Failed:' . $conn->connect_errno);
} else {

    $stmt = $conn->prepare('INSERT INTO formulario (nombre,apellido,email,telefono,documento_type,documento_num,distrito,direccion,plan,tipo_cliente) VALUES (?,?,?,?,?,?,?,?,?,?)');
    $stmt->bind_param("sssisissis", $nombre, $apellido, $email, $telefono, $document_type, $document_num, $distrito, $direccion, $plan, $tipo_cliente);
    $stmt->execute();
    $stmt->close();
    header('location: ../../index.php');
}
