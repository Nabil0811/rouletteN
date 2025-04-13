<!DOCTYPE html>
<html>
 	<head>
 	    <meta charset="utf-8" />

 	    <title> ROULETTE </title>

         <link rel="stylesheet" href="style.css" type="text/css" >

 	</head>
 	 
    <body>
        <nav>
            <ul>
                <a href = "v/tirage.php">Tirage</a>
                
            </ul>
        </nav>
        
        <br><br><br><br>
        <h2>Bienvenue !</h2>
        <h3>Vous retrouverez ci-dessous la liste des élève ainsi que leur note :</h3>

        <br>
        <table>
            <tr id="page">
                <td>Nom</td>
                <td>Prénom</td>
                <td>Note</td>
            </tr>
            <tr>
                <td colspan=3> Classe A </td>
            </tr>   

<?php
include "c/tableau.php";
?>

</table>
</body>
</html>