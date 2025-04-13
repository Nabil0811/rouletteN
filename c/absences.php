<?php

//absence ---
if(isset($_POST['abs'])){

    $classe = ($_POST['classes']);

    include "connexion_bd.php";

    $tire = isset($_POST['tire']) ? $_POST['tire'] : "";

$array = explode(' ', $tire);

$nom = $array[1];

$sql4 = "UPDATE $classe SET passage = REPLACE(passage, '0', '1') WHERE nom = '$nom' ";
$stmt4 = $conn->query($sql4);

$stmt4->execute();

$sql9 = "UPDATE $classe SET note = 'abs' WHERE nom = '$nom' ";
$stmt9 = $conn->query($sql9);

$stmt9->execute();


    $conn = null;

};

include "connexion_bd.php";

echo ("<h2>Classe A : </h2>");
$sql2 = "SELECT nom, prenom FROM classea CA WHERE CA.note = 'abs'";
$stmt2 = $conn->query($sql2);

// Traiter les résultats
try {

while ($row = $stmt2->fetch()) {
    echo('<form method="get">');
    echo ('<p>' . $row[0] . ' ' . $row[1] . '</p>');
    echo ('</form>');
};
}
catch(PDOException $e) {
echo "Erreur de connexion : " . $e->getMessage();
}

$sql3 = "SELECT nom, prenom FROM classeb CB WHERE CB.note = 'abs'";
$stmt3 = $conn->query($sql3);

echo ("<h2>Classe B : </h2>");

// Traiter les résultats
try {

while ($row = $stmt3->fetch()) {
    echo('<form method="get">');
    echo ('<p>' . $row[0] . ' ' . $row[1] . '</p>');
    echo ('</form>');
};
}
catch(PDOException $e) {
echo "Erreur de connexion : " . $e->getMessage();
}

$conn = null;

?>