<?php
    // INICIAMOS LA SESSION 
        session_start();
    // CERRAMOS LA SESSION
        session_unset();
    // DESTRUIMOS LA SESSION
        session_destroy();
    // REDIRECCIONAMOS AL INDEX.PHP
        header('Location: index.php');
    // FINALMENTE, SALIMOS DEL PROGRAMA
        exit();
?>
