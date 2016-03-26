<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if($bdd = mysqli_connect('localhost', 'root', 'root', 'gondola'))
{
	// Si la connexion a réussi, rien ne se passe.
}
else // Mais si elle rate…
{
	echo 'Erreur'; // On affiche un message d'erreur.
}
?>
