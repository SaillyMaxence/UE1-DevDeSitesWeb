<?php 
// header
require("include/header_inc.php");

?>
<!-- Feuille du style du formulaire de connexion -->
	<style type="text/css">
		
		

	</style>

<!-- formulaire de connexion -->
  <div class="wrapper">
    <form action="script/connexion.php" method="post" class="form-signin">       
      <h2 class="form-signin-heading" style="text-align: center;">Connexion</h2>
      <br/><br/>
      <input type="text" class="form-control" name="mail" placeholder="Email Address" required="" autofocus="" />
      <br/><br/>
      <input type="password" class="form-control" name="pass" placeholder="Password" required=""/>
      <br/><br/>      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div>
<?php

require("include/footer_inc.php");