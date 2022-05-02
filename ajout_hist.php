<!doctype html>
<html>
    <?php require "head.php";
    require "connect.php";
    require "header.php";?>
    <body>
        <h2 class="text-center">Ajouter une histoire</h2>

        <p>Combien de situations voulez-vous écrire ?</p>
        <form class="form-signin form-horizontal" role="form" action="ajout_hist.php" method="post">
            <input type="text" name="nbsit">
            <button type="submit" class="btn btn-default btn-secondary"> Enregistrer</button>
            <?php 
            $nbsituation = 0;
            if(isset($_POST['nbsit'])){
                $nbsituation=$_POST['nbsit'];}?>
        </form>

        <form>
            <p class="text-center">Entrez les situations présentes dans votre histoire</p>
                <fieldset><legend>Situations</legend>
                <?php for($i=1;$i<=$nbsituation;$i++){?>
                <div class="form-group">
                   
                    <div class="form-group">
                  
                        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <p class="text-center">Situation <?php echo $i?></p>
                            <textarea name="situation" class="form-control" placeholder="Ecrivez le paragraphe correspondant à la situation" rows="3"></textarea><br/><br/>
                        </div>
                    </div>
                </div>
                <?php } ?>
                </fieldset>
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-default btn-secondary"><span class="glyphicon"></span> Enregistrer</button>
                </div>
        </form>

    
        
<br/>
<br/>
        <?php require "footer.php";?>
    </body>

</html>
