<?php
   require_once "connexion.php";

   function getCategorie(){
    
    $sql = 'SELECT * from Categorie';

    $req = $GLOBALS['$bdd']->prepare($sql);
    $req->exec();
    return $req->fetch();
   }
?>