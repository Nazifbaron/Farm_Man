<?php
   require_once "connexion.php";

   if(isset($_POST['envoie'])){
        if(empty($_POST['libelle'])|| !empty($_POST['id'])){
            echo "Veuillez remplir tout les champs";
        }else{
            $libelle=htmlspecialchars($_POST['libelle']);
            $id = htmlspecialchars($_POST['id_update']);
            
            
            $sql='UPDATE categorie SET libelleCat=? WHERE id=?';
            $req = $bdd->prepare($sql);
            $req->execute(array($libelle, $id));

            if ($req->rowCount() > 0) {
                echo "<script> alert('modification éffectué avec succès');</script> .";  
                
              } else{
                echo "<script> alert('Une erreur s\'est produite lors de la modification');</script> ."; 
              }

        }
   }
   header('Location:../view/categorie.php');
?>