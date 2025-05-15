<?php 

//conexão usando PDO. padrão, sempre o mesmo código
$localhost = "localhost";
$user = "root";
$password = "mysql";
$banco = "loja";

try {
    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $err) {
    echo "ERRO: " . $err->getMessage(); 
    exit;
};



//Executa a consulta SQL diretamente (no caso, um SELECT *). Retorna um objeto da classe PDOStatement, que representa o resultado da consulta.
// $sql = $pdo->query("SELECT * FROM usuarios");
//Exibe o número de linhas retornadas pela consulta.
// echo $sql->rowCount();

//Pega todas as linhas do resultado da consulta SQL e retorna em forma de array.
// $sql = $pdo->query("SELECT * FROM usuarios");
// $usuarios = $sql->fetchAll();
// var_dump($usuarios);
// echo "<br>";
// echo count($usuarios);



?>