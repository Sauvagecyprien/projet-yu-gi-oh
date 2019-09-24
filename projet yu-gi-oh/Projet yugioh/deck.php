<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Yugioh;charset=utf8', 'Sullivan Gamin', 'NicolasGamin97422');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}









header ('Location : index.php');
?>