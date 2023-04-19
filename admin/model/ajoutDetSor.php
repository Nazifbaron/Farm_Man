<?php

session_start();
function dd($elm=null){
  var_dump($elm);
  die();
}
   require_once "connexion.php";
   if(isset($_POST['envoie'])){
  
        if(!empty($_POST['produit']) && !empty($_POST['sortie']) && !empty($_POST['quantite'])){
          $produit=htmlspecialchars($_POST['produit']);
          $sortie=htmlspecialchars($_POST['sortie']);
          $quantite=htmlspecialchars($_POST['quantite']);
          
          $sql='INSERT INTO detailSortie(Produit_id,Sortie_idS,quantite) VALUES(?,?,?)';
          $req = $bdd->prepare($sql);
          $req->execute(array($produit, $sortie,$quantite));
          
        
          if ($req->rowCount() > 0) {
              $_SESSION['success'] = 'Le détails a été bien ajouté';  
            } else{
              //echo "<script> alert('Une erreur s\'est entreee lors de l'ajout');</script> .";
              $_SESSION['success'] = 'Une erreur s\'est produite lors de l\'ajout'; 
            }

           
        }else{
          echo "Veuillez remplir tout les champs";
        }
   }
   header('Location:../view/detailSortie.php');
?>