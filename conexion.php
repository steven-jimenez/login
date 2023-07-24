<?php

try {
    $mysqli = new mysqli("localhost", "root", "", "mn-php");
    echo "conexion exitosa";
    // Verificar si hay errores al conectar
    if ($mysqli->connect_error) {
        die("Error de conexión: " . $mysqli->connect_error);
    }
} catch (mysqli_sql_exception $e) {
    die("Error: " . $e->getMessage());
}
