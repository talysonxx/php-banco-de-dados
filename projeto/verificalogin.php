<?php

// precisa sempre que for usar $_SESSION
// session_start();

function verificalogin() {
    if (empty($_SESSION['idusuario'])) {
        header("Location: index.php");
        exit;
    }
}

// require "conexao2.php";

// if(!empty($_SESSION['idusuario'])) {
//     require_once "Usuarios.class.php";
    
//     $u = new Usuarios();

//     $listlogged = $u->logged($_SESSION['idusuario']);

//     $nomeUser = $listlogged['nome'];
// } else { 
//     header("Location: index.php");
//     exit;
// }

?>