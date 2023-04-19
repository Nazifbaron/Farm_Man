<?php
//session_start(); 

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
          $id = htmlspecialchars($_POST['id_update']);

          

          $sql='UPDATE detailSortie SET Produit_id=?, Sortie_idS=?, quantite=? WHERE id=?';
          $req = $bdd->prepare($sql);
          $req->execute(array($produit, $sortie, $quantite, $id));
          
        
          if ($req->rowCount() > 0) {
              echo "<script> alert('Modification éffectué avec succès');</script> .";
            } else{
              echo "<script> alert('Une erreur s\'est produite lors de la modification');</script> ."; 
            }

        }
        else{
          //echo "Veuillez remplir tout les champs";
          echo "<script> alert('Veuillez remplir tout les champs');</script> ."
          
          
          
          
          ;  

           
        }
   }
   header('Location:../view/detailSortie.php');
?>