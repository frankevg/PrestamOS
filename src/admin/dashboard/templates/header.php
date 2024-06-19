<?php
include '../../db-functions/funciones.php';
$auth = estaAuntenticado();
var_dump($auth);
if (!$auth) {
    header('Location:/');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prestamos - Confianza y apoyo financiero</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" type="text/css" href="/admin/dashboard/css/main.css" />
    <link rel="stylesheet" type="text/css" href="/admin/dashboard/css/normalize.css" />
    <link rel="icon" href="/icon/icon.svg" type="image/x-icon" sizes="32x32">
</head>

<body>