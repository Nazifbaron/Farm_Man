<?php
//session_start(); 

function dd($elm=null){
  var_dump($elm);
  die();
}
   require_once "connexion.php";
   if(isset($_POST['envoie'])){
    
        if(!empty($_POST['type']) || !empty($_POST['date'])){
          $type=htmlspecialchars($_POST['type']);
          $date=htmlspecialchars($_POST['date']);
          $id = htmlspecialchars($_POST['id_update']);
          
          $sql='UPDATE entree SET typeE=?, dateE=? WHERE idE=?';
          $req = $bdd->prepare($sql);
          $req->execute(array($type, $date, $id));
          
        
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
   //header('Location:../view/entree.php');
?>