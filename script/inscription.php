<?php

require("../function/function.php");


if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['mdp']) && isset($_POST['verif_mdp'])){

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$mail = $_POST['mail'];
	$mdp = $_POST['mdp'];
	$verifMdp = $_POST['verif_mdp'];

	$password =md5($mdp);
		
	add_users($nom,$prenom,$mail,$password);
	header('location:../index.php');

}

