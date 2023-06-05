<?php

session_start();
function dd($elm=null){
  var_dump($elm);
  die();
}
   require_once "connexion.php";
   if(isset($_POST['envoie'])){
  
        if(!empty($_POST['produit']) && !empty($_POST['entre']) && !empty($_POST['quantite']) && !empty($_POST['prix'])){
          $produit=htmlspecialchars($_POST['produit']);
          $entre=htmlspecialchars($_POST['entre']);
          $quantite=htmlspecialchars($_POST['quantite']);
          $prix=htmlspecialchars($_POST['prix']);

          $sql='INSERT INTO detailEntree(Produit_id,Entree_idE,quantite,prix) VALUES(?,?,?,?)';
          $req = $bdd->prepare($sql);
          $req->execute(array($produit,$entre,$quantite,$prix));
          
        
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
   header('Location:../view/detailEntre.php');
?>