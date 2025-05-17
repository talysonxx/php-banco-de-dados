<?php

// precisa sempre que for usar $_SESSION
session_start();

function verificalogin() {
    if (empty($_SESSION['idusuario'])) {
        header("Location: index.php");
        exit;
    };
};

?>