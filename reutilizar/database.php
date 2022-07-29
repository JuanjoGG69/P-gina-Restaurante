<?php

$dsn = "mysql:host=localhost;dbname=restaurante";
$usuario = "root";
$password = "";

try { 
    $con = new PDO( $dsn, $usuario, $password ); 
    $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
} catch ( PDOException $e ) { echo "Conexión fallida: " . $e->getMessage(); }