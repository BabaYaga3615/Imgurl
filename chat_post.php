<?php
session_start();
$nom = $_SESSION['Pseudo'];                    //On récupère le pseudo et on le stocke dans une variable
$message = $_POST['message'];            //On fait de même avec le message
//$ligne = '<tr class="text-left"><td><strong>'.$nom.' > '.'</strong></td><td>'.$message.'</td></tr>';
$ligne = '<tr class="text-left">
<td><strong><a href="profile.php?pseudo_target='.$nom.'">'.$nom.'</a>:</strong></td>
<td>'.$message.'</td>
</tr>';
$leFichier = file('msg.htm');             //On lit le fichier ac.htm et on stocke la réponse dans une variable (de type tableau)
array_push($leFichier, $ligne);       //On ajoute le texte calculé dans la ligne précédente au début du tableau
file_put_contents('msg.htm', $leFichier); //On écrit le contenu du tableau $leFichier dans le fichier ac.htm
/*
     Ligne a mettre
<tr class="text-left">
<td><strong><a href="profile.php?pseudo_target=LEPSEUDO">LE PSEUDO</a>:</strong></td>
<td> LE MESSAGE</td>
</tr>

*/
?>
