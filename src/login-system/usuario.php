<?php
require '../db-functions/database.php';
//Crear Usuario
$email = "castro.k@bignet.pe";
$password = "@bignet2022";
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

//Declarar Query
$query = "INSERT INTO users(email, password) VALUES ('${email}','${passwordHash}');";
var_dump($passwordHash);
//Enviar Query
mysqli_query($conn, $query);
