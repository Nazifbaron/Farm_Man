<?php
   require_once "connexion.php";

   if(isset($_POST['envoie'])){
        if(empty($_POST['libelle'])){
            echo "Veuillez remplir tout les champs";
        }else{
            $libelle=htmlspecialchars($_POST['libelle']);
            
            
            $sql='INSERT INTO Categorie(libelleCat) VALUES(?)';
            $req = $bdd->prepare($sql);
            $req->execute(array($libelle));

            if ($req->rowCount() > 0) {
                echo "<script> alert('Ajout éffectué avec succès');</script> .";  
                
              } else{
                echo "<script> alert('Une erreur s\'est produite lors de l'ajout');</script> ."; 
              }

        }
   }
   header('Location:../view/categorie.php');
?>