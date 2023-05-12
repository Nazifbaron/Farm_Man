<?php
  require_once "connexion.php";

   
   function getCategorie(){
     
     $sql = 'SELECT * FROM categorie';
 
     $req = $GLOBALS['bdd']->prepare($sql);
 
     $req->execute();
 
     return $req->fetchAll();
  
    
 }
 function getCommande(){
     
  $sql = 'SELECT C.idCmd, montant, dateCmd, payer, adrLiv, nomCli, prenomCli 
  FROM commande AS C, client AS c WHERE C.Client_idCli=c.idCli';

  $req = $GLOBALS['bdd']->prepare($sql);

  $req->execute();

  return $req->fetchAll();

 }
 function getdetCommande(){
     
  $sql = 'SELECT C.idCmd, montant, dateCmd, payer, adrLiv, nomCli, prenomCli 
  FROM commande AS C, client AS c WHERE C.Client_idCli=c.idCli';

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

   function getDetEntr($id=null){
    $sql = 'SELECT * FROM produit ';
 
    $req = $GLOBALS['bdd']->prepare($sql);
   
    $req->execute(array($id));
   
    return $req->fetch();
   }

   function getDet($id=null){
    $sql = 'SELECT * FROM entree ';
 
    $req = $GLOBALS['bdd']->prepare($sql);
   
    $req->execute(array($id));
   
    return $req->fetch();
   }

   function getProduit(){
  
    $sql = 'SELECT p.id,nom,quantite,prix,statut,libelleCat, images FROM produit as p INNER JOIN categorie as c ON p.Categorie_idCat = c.id '; 

    $req = $GLOBALS['bdd']->prepare($sql);

    $req->execute();

    return $req->fetchAll();
   }


    function getProduitFini()
    {
  
      $sql = "SELECT p.id,nom,quantite,prix,libelleCat, images FROM produit as p INNER JOIN categorie as c ON p.Categorie_idCat = c.id WHERE statut='fini' "; 
  
      $req = $GLOBALS['bdd']->prepare($sql);
  
      $req->execute();
  
      return $req->fetchAll();
   
    }

    
function getProduits(){
  
  $sql = "SELECT p.id,nom,quantite,prix,libelleCat, images FROM produit as p INNER JOIN categorie as c ON p.Categorie_idCat = c.id WHERE statut='fini' LIMIT 8 "; 

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
function getEntre(){
  
  $sql = 'SELECT * FROM entree'; 

  $req = $GLOBALS['bdd']->prepare($sql);

  $req->execute();

  return $req->fetchAll();
}
function getEntreById($id=null){

  $sql = 'SELECT * FROM entree WHERE idE=?';
 
  $req = $GLOBALS['bdd']->prepare($sql);
 
  $req->execute(array($id));
 
  return $req->fetch();
 }

 function getSortie(){
  
  $sql = 'SELECT * FROM sortie'; 

  $req = $GLOBALS['bdd']->prepare($sql);

  $req->execute();

  return $req->fetchAll();
}

function getSortieById($id=null){

  $sql = 'SELECT * FROM sortie WHERE idS=?';
 
  $req = $GLOBALS['bdd']->prepare($sql);
 
  $req->execute(array($id));
 
  return $req->fetch();
 }

 function getDetailEntre(){
  
  $sql = 'SELECT d.id, nom, typeE, d.quantite,d.prix FROM produit as p, entree as e, detailEntree as d
  WHERE d.Produit_id=p.id AND d.Entree_idE=e.idE '; 

  $req = $GLOBALS['bdd']->prepare($sql);

  $req->execute();

  return $req->fetchAll();
}

function getDetailSortie(){
  
  $sql = 'SELECT d.id, nom,typeS, d.quantite FROM produit as p, sortie as s, detailSortie as d
  WHERE d.Produit_id=p.id  AND d.Sortie_idS=s.idS '; 

  $req = $GLOBALS['bdd']->prepare($sql);

  $req->execute();

  return $req->fetchAll();
}

function getDetailEntreById($id=null){
  
  $sql = 'SELECT * FROM  detailEntree WHERE id=? '; 

  $req = $GLOBALS['bdd']->prepare($sql);

  $req->execute(array($id));

  return $req->fetch();
}

function getDetailSortieById($id=null){
  
  $sql = 'SELECT * FROM  detailSortie WHERE id=? '; 

  $req = $GLOBALS['bdd']->prepare($sql);

  $req->execute(array($id));

  return $req->fetch();
}

function getAllProduit(){
  $sql='SELECT * FROM produit';
  $req= $GLOBALS['bdd']->query($sql);
  return $req;
}
function getAllEntre(){
  $sql='SELECT * FROM entree';
  $req= $GLOBALS['bdd']->query($sql);
  return $req;
}
function getAllSortie(){
  $sql='SELECT * FROM sortie';
  $req= $GLOBALS['bdd']->query($sql);
  return $req;
}
function file_upload($dir, $file)
{
    
    // Check if the file is well loaded
    if ($_FILES[$file]['name']) {
   
        // Check if the file do not contains errors
        if (!$_FILES[$file]['error']) {
         

            $temp_name = $_FILES[$file]['tmp_name']; // get the temp file name
            $type = $_FILES[$file]['type']; // get the file type
         
             // Check the file extensions 
             $typeList = array('png', 'jpg', 'jpeg');
             $clean_type = explode('/', $type);

            
            if (in_array($clean_type[1] ,$typeList)) {
               
               
              
                $name = $_FILES[$file]['name']; // get the real file name
                // ../medias/nomfichier.png
                $urlf = $dir . $name; 
                move_uploaded_file($temp_name, "../". $dir . $name); // upload the file
                return $urlf;
                
            } else {
                echo "<script>alert(\"Error ! Wrong file format ! Try Again\")</script>";
                exit();
            }
        }
    }
   
}

function search($word)
{ // fonction du moteur de recherche
    // cette fontion prend en paramètre le mot clé de la recherche
    // la recherche se fait en fonction du titre et de la description
    $query = preg_replace("#[^a-zA-Z ?0-9]#i", "", $word); // nettoyage du mot clé
    $sql = "SELECT * FROM produit WHERE nom LIKE ? OR quantite LIKE ? OR prix LIKE ? OR prix LIKE ? OR statut LIKE ? OR Categorie_idCat LIKE ? OR images LIKE ?"; // requete de reherche
    require('connect_db.php'); // récupération de l'objet de connection à la base de données 
    $req = $db -> prepare($sql); 
    $req -> execute(array('%'.$query.'%', '%'.$query.'%', '%'.$query.'%')); // execution de la requete de recherche
    return $req;
}
?>