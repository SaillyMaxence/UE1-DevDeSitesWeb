<?php
session_start();
require("../function/function.php");


if(isset($_POST['mail']) && isset($_POST['pass'])){

	$pass = $_POST['pass'];
	$mail = $_POST['mail'];

	if(!empty($mail) && !empty($pass)) {
		echo($mail);
	$data = pick_user($mail);
	$mail =  $data['mail'];
	$pswd =  $data['password'];
	if(md5($pass) === $pswd ){
	$_SESSION['id'] = $data['id'];
	$_SESSION['nom'] = $data['nom'];
	$_SESSION['prenom'] = $data['prenom'];
	header('location:../index.php');
}
	else{
	echo "pas les même pass";
	}

}
}