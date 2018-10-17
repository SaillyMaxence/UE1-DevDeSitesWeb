<?php

require("../function/function.php");


if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['mdp']) && isset($_POST['verif_mdp'])){

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$mail = $_POST['mail'];
	$mdp = $_POST['mdp'];
	$verifMdp = $_POST['verif_mdp'];




	if(!empty($nom) && !empty($prenom) && !empty($mail) && !empty($mdp) && !empty($verifMdp)){
		if (filter_var($mail, FILTER_VALIDATE_EMAIL)){
			if ($mdp == $verifMdp) {
				$password =md5($mdp);
				
				add_users($nom,$prenom,$mail,$password);
				header('location:../index.php');


			

			}
			else {
				echo "non non non non";
			}
		}
		else{
			echo("marche po 2");
		}	







	}
	else{
		echo"marche po";
	}





}
else{
	echo "manque des champs";
}


