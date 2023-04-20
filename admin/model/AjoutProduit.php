<?php

session_start();
function dd($elm=null){
  var_dump($elm);
  die();
}
   require_once "connexion.php";
   require_once "function.php";
   if(isset($_POST['envoie'])){
  
    
        if(empty($_POST['nom']) || empty($_POST['categorie']) || empty($_POST['quantite']) || empty($_POST['prix']) ){
            echo "Veuillez remplir tout les champs";
        }else{
            $nom=htmlspecialchars($_POST['nom']);
            $categorie=htmlspecialchars($_POST['categorie']);
            $quantite=htmlspecialchars($_POST['quantite']);
            $prix=htmlspecialchars($_POST['prix']);
            $img=file_upload('medias/', 'img');

          

            $sql='INSERT INTO produit(nom ,quantite,prix, Categorie_idCat,images) VALUES(?, ?, ?, ?, ?)';
            $req = $bdd->prepare($sql);
            $req->execute(array($nom, $quantite, $prix,$categorie, $img));
            
          
            if ($req->rowCount() > 0) {
                $_SESSION['success'] = 'Le produit a été bien ajouté';  
              } else{
                //echo "<script> alert('Une erreur s\'est produite lors de l'ajout');</script> .";
                $_SESSION['success'] = 'Une erreur s\'est produite lors de l\'ajout'; 
              }

        }
   }
   header('Location:../view/produit.php');
?>