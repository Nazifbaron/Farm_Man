<?php
  require_once "connexion.php";

  /*function getCategorie(){
      $id = trim(htmlspecialchars($_GET['idCat']));
      $categorie = getCategorieById($id);
  
    $sql = 'SELECT * FROM categorie';

    $req = $GLOBALS['bdd']->prepare($sql);

    $req->execute();

    return $req->fetchAll();
 
   
}

function getCategorieById($id=null){

 $sql = 'SELECT * FROM categorie WHERE idCat=?';

 $req = $GLOBALS['bdd']->prepare($sql);

 $req->execute(array($id));

 return $req->fetch();
}*/
   
   function getCategorie(){
     
     $sql = 'SELECT * FROM categorie';
 
     $req = $GLOBALS['bdd']->prepare($sql);
 
     $req->execute();
 
     return $req->fetchAll();
  
    
 }

 function getCategorieById($id){

  $sql = 'SELECT * FROM categorie WHERE id=?';
 
  $req = $GLOBALS['bdd']->prepare($sql);

  $req->execute(array($id));

  return $req->fetch();
 }

 

  /* function getProduit($id=null){
    if(!empty($id)){
      $sql = "SELECT nom,libelleCat,quantite,prix,Categorie_id p.id FROM produit As p, categorie As c
       WHERE p.id=c.id AND p.id=?";
   
       $req = $GLOBALS['bdd']->prepare($sql);
   
       $req->execute(array($id));
   
       return $req->fetch();
    }else{
      $sql = 'SELECT * from produit';
    

      $req = $GLOBALS['bdd']->query($sql);
     
      return $req->fetchAll();
    }
    
    
   }*/
   function getProduit(){
  
    $sql = 'SELECT * FROM produit';

    $req = $GLOBALS['bdd']->prepare($sql);

    $req->execute();

    return $req->fetchAll();
 
   
}

function getProduitById($id=null){

 $sql = 'SELECT * FROM produit WHERE id=?';

 $req = $GLOBALS['bdd']->prepare($sql);

 $req->execute(array($id));

 return $req->fetch();
}
   
?>