<?php

$user = "root";
$pass = "";

try {
    $con = new PDO("mysql:host=localhost;dbname=agenda", $user, $pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
