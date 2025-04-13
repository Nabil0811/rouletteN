<?php

if(isset($_POST['reseter'])){

$classe = ($_POST['classes']);

include "connexion_bd.php";

$sql10 = "UPDATE $classe SET passage = '0' ";
$stmt10 = $conn->query($sql10);

$stmt10->execute();

if($classe == 'classea') {
    echo ("<h3> Les passages de la classe A ont bien été réinitialisés ! </h3>");
};

if($classe == 'classeb') {
    echo ("<h3> Les passages de la classe B ont bien été réinitialisés ! </h3>");
};
};