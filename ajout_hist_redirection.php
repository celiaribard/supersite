<?php require "head.php";
    require "connect.php";
    require "header.php";?>

    <?php 
    if(isset($_POST['titre']) && isset($_POST['description']) && isset($_POST['image'])){
                    $titre = $_POST['titre'];
                    $description = $_POST['description'];
                    $image = $_POST['image'];
                    if($BDD){
                        $req = "INSERT INTO histoire (titre,description, image) VALUES (:ttre,:descr,:img)";
                        $prepare=$BDD ->prepare($req);
                        $prepare -> execute(array("ttre"=>$titre, "descr"=>$description, "img"=>$image));

                        $req_id_hist = $BDD->prepare("SELECT * FROM histoire WHERE titre=:unTitre");
                        $req_id_hist->execute(array("unTitre"=>$titre));
                        $id = $req_id_hist->fetch()['id_hist'];
                }
            }
            header('Location: ajout_situations.php?&id_hist='.$id); 
            ?>