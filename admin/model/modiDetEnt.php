<?php
//session_start(); 

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
          $id = htmlspecialchars($_POST['id_update']);

          

          $sql='UPDATE detailEntree SET Produit_id=?, Entree_idE=?, quantite=?, prix=? WHERE id=?';
          $req = $bdd->prepare($sql);
          $req->execute(array($produit, $entre, $quantite, $prix, $id));
          
        
          if ($req->rowCount() > 0) {
              echo "<script> alert('Modification éffectué avec succès');</script> .";
            } else{
              echo "<script> alert('Une erreur s\'est produite lors de la modification');</script> ."; 
            }

        }
        else{
          //echo "Veuillez remplir tout les champs";
          echo "<script> alert('Veuillez remplir tout les champs');</script> .";  

           
        }
   }
   header('Location:../view/detailEntre.php');
?>