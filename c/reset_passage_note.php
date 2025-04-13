<?php

if(isset($_POST['reseterTout']))
{
    $classe = ($_POST['classes']);

    // connexion à la base de données
    include "connexion_bd.php";

    $sql11 = "UPDATE $classe SET passage = '0', note = '0', nb_tirages = 0";
    $stmt11 = $conn->query($sql11);

    $stmt11->execute();

    echo("<h3> Les passages, les notes et le compteur de tirages de la $classe ont été réinitialisés </h3>");
    
    $conn = null;
}
?>