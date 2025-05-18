<?php

class Usuarios {
    public function login($email, $senha) {
        global $pdo;

        // adicionando HASH
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $dado = $sql->fetch();

            if(password_verify($senha, $dado['senha'])) {
                $_SESSION['idusuario'] = $dado['id'];
                return true;
            }
        } else {
            return false;
        }

    //     // $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    //     $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
    //     $sql = $pdo->prepare($sql);
    //     $sql->bindValue("email", $email);
    //     $sql->bindValue("senha", md5($senha));
    //     $sql->execute();

    //     if($sql->rowCount() > 0) {
    //         $dado = $sql->fetch();

    //         $_SESSION['idusuario'] = $dado['id'];

    //         return true;
    //         // echo $dado['id'];
    //     } else {
    //         return false;
    //     }
    }

    public function logged($id) {
        global $pdo;

        $array = array();

        $sql = "SELECT nome from usuarios WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("id", $id);
        $sql->execute();

        if($sql->rowCount() > 0 ) {
            $array = $sql->fetch();
        }

        return $array;
    }
}

?>