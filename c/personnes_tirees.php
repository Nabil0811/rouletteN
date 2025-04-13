<?php
    include "connexion_bd.php";

    echo ("<h2>Classe A : </h2>");
    $sql2 = "SELECT nom, prenom FROM classea CA WHERE CA.passage = '1'";
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

// --- différentes classes

    $sql3 = "SELECT nom, prenom FROM classeb CB WHERE CB.passage = '1'";
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