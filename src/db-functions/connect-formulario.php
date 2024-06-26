<?php

include_once 'database.php';

// Recuperar los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordHash = password_hash($password, PASSWORD_BCRYPT);
$telefono = $_POST['telefono'];
$ruc = $_POST['ruc'];
$document_type = $_POST['document_type'];
$document_num = $_POST['document_num'];
$distrito = $_POST['distrito'];
$direccion = $_POST['direccion'];

// Verificar si el usuario ya existe en la tabla users
$stmt_check_user = $conn->prepare('SELECT COUNT(*) FROM users WHERE email = ?');
$stmt_check_user->bind_param("s", $email);
$stmt_check_user->execute();
$stmt_check_user->bind_result($user_count);
$stmt_check_user->fetch();
$stmt_check_user->close();

if ($user_count > 0) {
    // El usuario ya existe en la tabla users, muestra un mensaje de error o realiza alguna acción adecuada
    header('Location: ../../error-usuario-registrado.php');
    exit(); // Salir del script si el usuario ya existe
}

// Insertar datos en la tabla users
$stmt_insert_user = $conn->prepare('INSERT INTO users (email, password) VALUES (?, ?)');
$stmt_insert_user->bind_param("ss", $email, $passwordHash);
$stmt_insert_user->execute();
$stmt_insert_user->close();

// Insertar datos en la tabla datos_usuario
$stmt_insert_datos = $conn->prepare('INSERT INTO datos_usuario (nombre, apellido, email, telefono, ruc, documento_type, documento_num, distrito, direccion, fecha_registro) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())');
$stmt_insert_datos->bind_param("ssssisiss", $nombre, $apellido, $email, $telefono, $ruc, $document_type, $document_num, $distrito, $direccion);

if ($stmt_insert_datos->execute()) {
    // La inserción fue exitosa
    header('Location: ../../exito.php');
    exit(); // Salir del script después de la inserción exitosa
} else {
    // La inserción falló
    die('La inserción en la base de datos falló');
}

$stmt_insert_datos->close();
$conn->close();
?>
