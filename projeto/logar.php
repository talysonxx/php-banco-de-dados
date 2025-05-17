<?php 

//A função isset() verifica se uma variável está definida e não é null.
// Aqui, está verificando se ambos os campos (email e senha) foram enviados no formulário.
if(isset($_POST['email'], $_POST['senha']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    require 'conexao2.php';
    require 'Usuarios.class.php';

    $u = new Usuarios();
    
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if($u->login($email, $senha)) {
        if(!empty($_SESSION['idusuario'])) {
            header("Location: loja.php");
            exit;
        } else {
            header("Location: index.php");
            exit;
        };
    } else {
        header("Location: index.php");
        exit;
    };
} else {
    header("Location: index.php");
    exit;
};

?>