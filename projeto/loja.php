<?php 

require "conexao2.php";

// if(empty($_SESSION['idusuario'])) {
//     header("Location: index.php");
//     exit;
// }

require "verificalogin.php";
verificalogin();
require_once "Usuarios.class.php";
$u = new Usuarios();
$nomeUser = $u->logged($_SESSION['idusuario'])['nome'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Loja com PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Início</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Cadastro
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Clientes</a></li>
                        <li><a class="dropdown-item" href="#">Produtos</a></li>
                    </ul>
                    </li>
                </ul>
                <div class="d-flex" role="search">
                    <label for=""><?php echo $nomeUser ?></label>
                    <a href="logout.php">SAIR</a>
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit">Search</button> -->
                </div>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>