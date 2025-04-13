<?php

//note 0 ---
if(isset($_POST['note0'])){

$classe = ($_POST['classes']);

include "connexion_bd.php";

$tire = isset($_POST['tire']) ? $_POST['tire'] : "";

$array = explode(' ', $tire);

$nom = $array[1];

$sql4 = "UPDATE $classe SET passage = REPLACE(passage, '0', '1') WHERE nom = '$nom' ";
$stmt4 = $conn->query($sql4);

$stmt4->execute();

echo ("<h3> L'élève $tire a bien été noté </h3>");

$sql5 = "UPDATE $classe SET note = '0' WHERE nom = '$nom' ";
$stmt5 = $conn->query($sql5);

$stmt5->execute();

$conn = null;




};

//note 1 ---
if(isset($_POST['note1'])){

    $classe = ($_POST['classes']);

    include "connexion_bd.php";

    $tire = isset($_POST['tire']) ? $_POST['tire'] : "";

$array = explode(' ', $tire);

$nom = $array[1];

$sql4 = "UPDATE $classe SET passage = REPLACE(passage, '0', '1') WHERE nom = '$nom' ";
$stmt4 = $conn->query($sql4);

$stmt4->execute();

$tire = isset($_POST['tire']) ? $_POST['tire'] : "";

$array = explode(' ', $tire);

$nom = $array[1];

$sql4 = "UPDATE $classe SET passage = REPLACE(passage, '0', '1') WHERE nom = '$nom' ";
$stmt4 = $conn->query($sql4);

$stmt4->execute();

echo ("<h3> L'élève $tire a bien été noté </h3>");

$sql6 = "UPDATE $classe SET note = '1' WHERE nom = '$nom' ";
$stmt6 = $conn->query($sql6);

$stmt6->execute();

$conn = null;
};

//note 2 ---
if(isset($_POST['note2'])){

    $classe = ($_POST['classes']);

    include "connexion_bd.php";

    $tire = isset($_POST['tire']) ? $_POST['tire'] : "";

$array = explode(' ', $tire);

$nom = $array[1];

$sql4 = "UPDATE $classe SET passage = REPLACE(passage, '0', '1') WHERE nom = '$nom' ";
$stmt4 = $conn->query($sql4);

$stmt4->execute();

echo ("<h3> L'élève $tire a bien été noté </h3>");

$sql7 = "UPDATE $classe SET note = '2' WHERE nom = '$nom' ";
$stmt7 = $conn->query($sql7);

$stmt7->execute();

    $conn = null;

};

//note 3 ---
if(isset($_POST['note3'])){

    $classe = ($_POST['classes']);

    include "connexion_bd.php";

    $tire = isset($_POST['tire']) ? $_POST['tire'] : "";

$array = explode(' ', $tire);

$nom = $array[1];

$sql4 = "UPDATE $classe SET passage = REPLACE(passage, '0', '1') WHERE nom = '$nom' ";
$stmt4 = $conn->query($sql4);

$stmt4->execute();

echo ("<h3> L'élève $tire a bien été noté </h3>");

$sql8 = "UPDATE $classe SET note = '3' WHERE nom = '$nom' ";
$stmt8 = $conn->query($sql8);

$stmt8->execute();

    $conn = null;

};

?>