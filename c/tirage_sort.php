<?php

if(isset($_POST['melange']))
{
    $classe = ($_POST['classes']);
    $a = 1;

    // connexion à la base de données
    include "connexion_bd.php";

    // Exemple d'exécution d'une requête
    $sql1 = "SELECT nom, prenom FROM $classe WHERE passage = '0' ORDER BY rand() LIMIT $a";
    $stmt1 = $conn->query($sql1);

    try {
    // Traiter les résultats
    while ($row = $stmt1->fetch()) {
        // Incrémenter le compteur nb_tirages pour cet élève
        $nom = $row[0];
        $sql_update = "UPDATE $classe SET nb_tirages = nb_tirages + 1 WHERE nom = '$nom'";
        $conn->query($sql_update);
        
        echo('<form method="get">');
        echo ('<input id="tire" type="text" value=" ' . $row[0] . ' ' . $row[1] . '" readonly name="tire">');
        echo ('<br><br><input type="submit" id="note0" name="note0" value="0">');
        echo ('<input type="submit" id="note1" name="note1" value="1">');
        echo ('<input type="submit" id="note2" name="note2" value="2">');
        echo ('<input type="submit" id="note3" name="note3" value="3">');
        echo ('<input type="submit" id="abs" name="abs" value="Absent(e)">');
        echo ('<br><br>');
        echo ('</form>');
    }
    }catch(PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    };
};
$conn = null;
?>