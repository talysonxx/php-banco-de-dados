<?php

//conexao simples
$localhost = "localhost";
$user = "root";
$password = "mysql";
$banco = "loja";

$conecta = mysqli_connect($localhost, $user, $password, $banco);

$sql = mysqli_query($conecta, "SELECT * FROM usuarios;");

echo "Existem ".mysqli_num_rows($sql). " registros";


?>