<?php
    ob_start();
    session_start();
    include_once("../../include/Functions.php");
    $loginClass = new LoginClass();

    $loginClass->cerrar_sesion();

    ob_end_flush();
?>