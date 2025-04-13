<!DOCTYPE html>
<html>
 	<head>
 	    <meta charset="utf-8" />

 	    <title> ROULETTE </title>

         <link rel="stylesheet" href="../style.css" type="text/css" >

 	</head>
 	 
    <body>

        <nav>
            <ul>
                <a href = "accueil.php">Accueil</a>
                <a href = "tirage.php">Tirage</a>
                
            </ul>
        </nav>
        
        <br><br><br><br>
        <h2>Tirage au sort</h2>

        <form method="post">
        <br><br>

        <select name="classes" id="selectionneur">
            <option id="classea" value="classea">Classe A</option>
            <option id="classeb" value="classeb">Classe B</option>
        </select>

        <script src="../selecteur.js"></script>

        <br><br><br>
        
        <input type="submit" id="melange" name="melange" value="Tirer au sort">

        <input type="submit" id="melange" name="melangeabs" value="Tirer un absent">

        <br><br>
        
        <input type="submit" id="reseter" name="reseter" value="Réinitialiser les passages">

        <input type="submit" id="reseterTout" name="reseterTout" value="Tout réinitialiser">

        <br><br>


<?php

include "../c/tirage_sort.php";
include "../c/tirage_abs.php";
include "../c/notes.php";
include "../c/reset_passage.php";
include "../c/reset_passage_note.php";

?>

<br><br>
<table>
    <tr>
        <td><h3>Absences :</h3></td>
        <td>
        <?php
            include "../c/absences.php";
        ?>
        </td>
    </tr>
    <tr>
        <td><h3>Personnes restantes :</h3></td>
        <td>
        <?php
            include "../c/personnes_restantes.php";
        ?>
        </td>
    </tr>
    <tr>
        <td><h3>Personnes déjà notées :</h3></td>
        <td>
        <?php
            include "../c/personnes_tirees.php";
        ?>
        </td>
    </tr>
</table>


</form>
</body>
</html>
