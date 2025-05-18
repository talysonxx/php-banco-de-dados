<?php 

$senha = 'asuna';
$hash = password_hash($senha, PASSWORD_DEFAULT);

echo "senha: " . $senha . "<br>Hash: " . $hash; 

?>