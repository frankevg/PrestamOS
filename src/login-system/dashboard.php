<?php
include '../db-functions/funciones.php';
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
    <title>BIGNET - La velocidad que mereces cada vez más cerca de ti</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="/icon/icon.png" type="image/x-icon" sizes="32x32">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,500;1,100&family=Raleway:wght@100;200;500;700;800;900&display=swap');
    </style>

    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<!--
    <section>
        <img src="/img/nosotros/HISTORIA4.png" alt="Historia4">
    </section>
-->
</div>

<?php include_once '../includes/templates/footer.php'; ?>