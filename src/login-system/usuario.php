<?php
require '../db-functions/database.php';
//Crear Usuario
$email = "admin@admin.com";
$password = "admin";
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

//Declarar Query
$query = "INSERT INTO users(email, password) VALUES ('${email}','${passwordHash}');";
var_dump($passwordHash);
//Enviar Query
mysqli_query($conn, $query);
