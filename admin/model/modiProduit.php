<?php


function dd($elm=null){
  var_dump($elm);
  die();
}
   require_once "connexion.php";
   if(isset($_POST['envoie'])){
    
        if(!empty($_POST['nom']) || !empty($_POST['categorie']) || !empty($_POST['quantite'])
         || !empty($_POST['prix']) || !empty($_POST['id'])){
          $nom=htmlspecialchars($_POST['nom']);
          $categorie=htmlspecialchars($_POST['categorie']);
          $quantite=htmlspecialchars($_POST['quantite']);
          $prix=htmlspecialchars($_POST['prix']);
          $id = htmlspecialchars($_POST['id_update']);
          
          $sql='UPDATE produit SET nom=?, quantite=?, prix=?, Categorie_idCat=? WHERE id=?';
          $req = $bdd->prepare($sql);
          $req->execute(array($nom, $quantite, $prix, $categorie, $id));

         // var_dump($id);
          
        
          if ($req->rowCount() > 0) {
              echo "<script> alert('Modification éffectué avec succès');</script> .";
             // header('Location:../view/produit.php');  
            } else{
              echo "<script> alert('Une erreur s\'est produite lors de la modification');</script> ."; 
            }

        }else{
          echo "Veuillez remplir tout les champs";
           
        }
   }
   //header('Location:../view/produit.php');
?>