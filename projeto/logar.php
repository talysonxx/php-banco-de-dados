<?php 

//A função isset() verifica se uma variável está definida e não é null.
// Aqui, está verificando se ambos os campos (email e senha) foram enviados no formulário.
if(isset($_POST['email'], $_POST['senha']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    require 'conexao2.php';
    require 'Usuarios.class.php';

    $u = new Usuarios();
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($u->login($email, $senha)) {
        header("Location: loja.php");
    } else {
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}

?>