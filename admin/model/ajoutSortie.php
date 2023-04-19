<?php

session_start();
function dd($elm=null){
  var_dump($elm);
  die();
}
   require_once "connexion.php";
   if(isset($_POST['envoie'])){
  
    
        if(empty($_POST['type']) || empty($_POST['date']) ){
            echo "Veuillez remplir tout les champs";
        }else{
            $type=htmlspecialchars($_POST['type']);
            $date=htmlspecialchars($_POST['date']);
            
            $sql='INSERT INTO sortie(typeS ,dateS) VALUES(?, ?)';
            $req = $bdd->prepare($sql);
            $req->execute(array($type, $date));
            
          
            if ($req->rowCount() > 0) {
                $_SESSION['success'] = 'La sortie a été bien ajouté';  
              } else{
                //echo "<script> alert('Une erreur s\'est entreee lors de l'ajout');</script> .";
                $_SESSION['success'] = 'Une erreur s\'est produite lors de l\'ajout'; 
              }

        }
   }
   header('Location:../view/sortie.php');
?>