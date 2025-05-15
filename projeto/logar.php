<?php 

//isset Retorna true se a variável existe e não é null
if(isset($_POST['email'], $_POST['senha']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

} else {
    header("Location: index.php");
};

$login = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);

?>