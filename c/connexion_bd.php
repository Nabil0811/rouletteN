<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_roulette";

    // Créer une instance de la classe PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Définir le mode d'erreur de PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
?>