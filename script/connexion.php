<?php

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
	
	}
	else{
	echo "pas les même pass";
	}

}
}