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
        </section>