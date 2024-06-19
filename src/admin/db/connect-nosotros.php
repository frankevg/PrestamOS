<?php
include_once 'databaseadmin.php';



if (isset($_POST['historia'])) {
    $historia = $_POST['historia'];


    $consulta = "SELECT * FROM `nosotros` WHERE id='historia'";


    if ($conn->connect_errno) {
        die('Conection Failed:' . $conn->connect_errno);
    } else {;
        $stmt = $conn->prepare('UPDATE `nosotros` SET contenido=? WHERE id ="historia"');
        $stmt->bind_param("s", $historia);
        $stmt->execute();

        $stmt->close();



        header('Location:../dashboard/historia.php');
    }
}

if (isset($_POST['quees'])) {
    $quees = $_POST['quees'];


    $consulta = "SELECT * FROM `nosotros` WHERE id='quees'";


    if ($conn->connect_errno) {
        die('Conection Failed:' . $conn->connect_errno);
    } else {;
        $stmt = $conn->prepare('UPDATE `nosotros` SET contenido=? WHERE id ="quees"');
        $stmt->bind_param("s", $quees);
        $stmt->execute();

        $stmt->close();


        header('Location:../dashboard/quees.php');
    }
}
if (isset($_POST['vision'])) {
    $vision = $_POST['vision'];


    $consulta = "SELECT * FROM `nosotros` WHERE id='vision'";


    if ($conn->connect_errno) {
        die('Conection Failed:' . $conn->connect_errno);
    } else {;
        $stmt = $conn->prepare('UPDATE `nosotros` SET contenido=? WHERE id ="vision"');
        $stmt->bind_param("s", $vision);
        $stmt->execute();

        $stmt->close();



        header('Location:../dashboard/vision.php');
    }
}
if (isset($_POST['mision'])) {
    $mision = $_POST['mision'];


    $consulta = "SELECT * FROM `nosotros` WHERE id='mision'";


    if ($conn->connect_errno) {
        die('Conection Failed:' . $conn->connect_errno);
    } else {;
        $stmt = $conn->prepare('UPDATE `nosotros` SET contenido=? WHERE id ="mision"');
        $stmt->bind_param("s", $mision);
        $stmt->execute();

        $stmt->close();



        header('Location:../dashboard/mision.php');
    }
}
