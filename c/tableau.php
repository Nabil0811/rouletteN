<?php

// Informations de connexion à la base de données
include "connexion_bd.php";

try{
    // Exemple d'exécution d'une requête
    $sql1 = "SELECT nom, prenom, note FROM classea";
    $stmt1 = $conn->query($sql1);

    // Traiter les résultats
    while ($row = $stmt1->fetch()) {
        echo('<form method="get">');
        echo('<tr>');
        echo ('<td>' . $row[0] . '</td>');
        echo ('<td>' . $row[1] . '</td>');
        echo ('<td>' . $row[2] . '</td>');
        echo('</tr>');
        echo ('</form>');
    };
    
    // Calcul des statistiques pour la classe A
    echo('<tr><td colspan="3"><strong>Statistiques Classe A</strong></td></tr>');
    
    // Récupérer toutes les notes numériques (0, 1, 2, 3) de la classe A
    $sqlStatsA = "SELECT note FROM classea WHERE note IN ('0', '1', '2', '3')";
    $stmtStatsA = $conn->query($sqlStatsA);
    $notesA = [];
    
    while ($row = $stmtStatsA->fetch()) {
        $notesA[] = (int)$row[0];
    }
    
    if (count($notesA) > 0) {
        // Moyenne
        $moyenne = array_sum($notesA) / count($notesA);
        
        // Médiane
        sort($notesA);
        $count = count($notesA);
        $mediane = ($count % 2 === 0) ? 
            ($notesA[$count/2 - 1] + $notesA[$count/2]) / 2 : 
            $notesA[floor($count/2)];
        
        // Écart-type
        $variance = 0;
        foreach ($notesA as $note) {
            $variance += pow($note - $moyenne, 2);
        }
        $ecartType = sqrt($variance / count($notesA));
        
        echo('<tr><td>Moyenne</td><td colspan="2">' . number_format($moyenne, 2) . '</td></tr>');
        echo('<tr><td>Médiane</td><td colspan="2">' . $mediane . '</td></tr>');
        echo('<tr><td>Écart-type</td><td colspan="2">' . number_format($ecartType, 2) . '</td></tr>');
        
        // Nombre total de tirages pour la classe A
        $sqlTiragesA = "SELECT SUM(nb_tirages) FROM classea";
        $stmtTiragesA = $conn->query($sqlTiragesA);
        $tiragesA = $stmtTiragesA->fetch();
        if ($tiragesA && $tiragesA[0] !== null) {
            echo('<tr><td>Nombre total de tirages</td><td colspan="2">' . $tiragesA[0] . '</td></tr>');
        } else {
            echo('<tr><td>Nombre total de tirages</td><td colspan="2">0</td></tr>');
        }
        
        // Enregistrer les statistiques dans la table stats_notes
        $sqlInsertStats = "INSERT INTO stats_notes (classe, moyenne, mediane, ecart_type) 
                          VALUES ('classea', :moyenne, :mediane, :ecart_type)";
        $stmtInsertStats = $conn->prepare($sqlInsertStats);
        $stmtInsertStats->bindParam(':moyenne', $moyenne);
        $stmtInsertStats->bindParam(':mediane', $mediane);
        $stmtInsertStats->bindParam(':ecart_type', $ecartType);
        $stmtInsertStats->execute();
    } else {
        echo('<tr><td colspan="3">Pas de notes disponibles pour calculer les statistiques</td></tr>');
    }

    echo(' 
        <tr>
            <td colspan=3> Classe B </td>
        </tr>'
        );

    $sql2 = "SELECT nom, prenom, note FROM classeb";
    $stmt2 = $conn->query($sql2);
    
    // Traiter les résultats
    while ($row = $stmt2->fetch()) {
        echo('<form method="get">');
        echo('<tr>');
        echo ('<td>' . $row[0] . '</td>');
        echo ('<td>' . $row[1] . '</td>');
        echo ('<td>' . $row[2] . '</td>');
        echo('</tr>');
        echo ('</form>');
    };
    
    // Calcul des statistiques pour la classe B
    echo('<tr><td colspan="3"><strong>Statistiques Classe B</strong></td></tr>');
    
    // Récupérer toutes les notes numériques (0, 1, 2, 3) de la classe B
    $sqlStatsB = "SELECT note FROM classeb WHERE note IN ('0', '1', '2', '3')";
    $stmtStatsB = $conn->query($sqlStatsB);
    $notesB = [];
    
    while ($row = $stmtStatsB->fetch()) {
        $notesB[] = (int)$row[0];
    }
    
    if (count($notesB) > 0) {
        // Moyenne
        $moyenne = array_sum($notesB) / count($notesB);
        
        // Médiane
        sort($notesB);
        $count = count($notesB);
        $mediane = ($count % 2 === 0) ? 
            ($notesB[$count/2 - 1] + $notesB[$count/2]) / 2 : 
            $notesB[floor($count/2)];
        
        // Écart-type
        $variance = 0;
        foreach ($notesB as $note) {
            $variance += pow($note - $moyenne, 2);
        }
        $ecartType = sqrt($variance / count($notesB));
        
        echo('<tr><td>Moyenne</td><td colspan="2">' . number_format($moyenne, 2) . '</td></tr>');
        echo('<tr><td>Médiane</td><td colspan="2">' . $mediane . '</td></tr>');
        echo('<tr><td>Écart-type</td><td colspan="2">' . number_format($ecartType, 2) . '</td></tr>');
        
        // Nombre total de tirages pour la classe B
        $sqlTiragesB = "SELECT SUM(nb_tirages) FROM classeb";
        $stmtTiragesB = $conn->query($sqlTiragesB);
        $tiragesB = $stmtTiragesB->fetch();
        if ($tiragesB && $tiragesB[0] !== null) {
            echo('<tr><td>Nombre total de tirages</td><td colspan="2">' . $tiragesB[0] . '</td></tr>');
        } else {
            echo('<tr><td>Nombre total de tirages</td><td colspan="2">0</td></tr>');
        }
        
        // Enregistrer les statistiques dans la table stats_notes
        $sqlInsertStats = "INSERT INTO stats_notes (classe, moyenne, mediane, ecart_type) 
                          VALUES ('classeb', :moyenne, :mediane, :ecart_type)";
        $stmtInsertStats = $conn->prepare($sqlInsertStats);
        $stmtInsertStats->bindParam(':moyenne', $moyenne);
        $stmtInsertStats->bindParam(':mediane', $mediane);
        $stmtInsertStats->bindParam(':ecart_type', $ecartType);
        $stmtInsertStats->execute();
    } else {
        echo('<tr><td colspan="3">Pas de notes disponibles pour calculer les statistiques</td></tr>');
    }

} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
$conn = null;

?>