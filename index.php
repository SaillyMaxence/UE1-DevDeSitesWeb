<!DOCTYPE html>
<html lang="fr">

	<?php 
		include("include/header_inc.php");
	  	require("bdd/connection.php");
	  	date_default_timezone_set('Europe/Paris');
	?>

    <!-- About Section -->
   <?php if(isset($_GET['id'])) { 
        include("include/modify_inc.php"); ?>
    <?php 
}
    else {
    ?>
    <section>

        <div class="container">
            <div class="row">              
                <form action="script/insert.php" method="post">
                    <div class="col-sm-10">  
                        <div class="form-group">
                            <textarea id="message" name="message" class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                    </div>                        
                </form>
            </div>

    <?php
    }?>
    

            <div class="row">
                <div class="col-md-12">
                		<?php
                
                			$response = $bdd->query('SELECT id,msg,dates from message ORDER BY dates DESC');

                		while ($donnees = $response->fetch()) {
                			?>

                			<blockquote>
                                <p>
                                    <?php echo($donnees['msg']) ?>
                                        
                                </p>
                                <footer><?php echo (date('d m Y',$donnees['dates'])) ?>  
                                </footer>
                                <button type="submit" class="btn btn-primary" id=""><a href="index.php?id=<?php echo  ($donnees['id'])?>">Modifier</a></button>
                                <button type="submit" class="btn btn-danger"><a href="script/delete.php?id=<?php echo ($donnees['id'])?>">Supprimer</a> </button>

                            </blockquote>

                		<?php	
                		
                        }

                		$response->closeCursor(); // Termine le traitement de la requête


 						?>
                </div>
            </div>
        </div>
    </section>


    <?php include("include/footer_inc.php"); ?>

</body>

</html>