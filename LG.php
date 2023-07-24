<?php
session_start();
if (!empty($_POST["btn_login"])) {
    if (!empty($_POST["email_user"] and !empty($_POST["password_user"]))) {
        $emailUser = $_POST["email_user"];
        $passwordUser = $_POST["password_user"];
        $sql = $mysqli->query(" select * from usuarios where email='$emailUser' and password='$passwordUser' ");
        if ($datos = $sql->fetch_object()) {
            $_SESSION["id"] = $datos->id;
            $_SESSION["username"] = $datos->username;
            header("location: register.php");
        } else {
            echo "<div class='alert alert-danger'>Acceso denegado</div>";
        }
    } else {
        echo "favor completar los campos";
    }
};

include 'conexion.php';
