<?php
function estaAuntenticado(): bool
{
    session_start();
    $auth = $_SESSION['login'];
    if ($auth) {
        return true;
    } else {
        return false;
    }
}
