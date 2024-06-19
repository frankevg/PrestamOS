
<?php
include_once 'databaseadmin.php';
echo "connection successfully";

$orden = $_POST['orden'];
$pregunta = $_POST['pregunta'];
$respuesta = $_POST['respuesta'];


if ($conn->connect_errno) {
    die('Conection Failed:' . $conn->connect_errno);
} else {

    $stmt = $conn->prepare('UPDATE `faq`SET pregunta = ?, respuesta=? WHERE orden =?');
    $stmt->bind_param("ssi", $pregunta, $respuesta, $orden);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();


    echo "resultado enviado correctamente";
    header('Location:../dashboard/faq.php');
}
