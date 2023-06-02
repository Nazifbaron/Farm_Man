<?php 

try{   
    $bdd = new PDO ('mysql:host=localhost;dbname=mydb;charset=utf8','nazif','moussa');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $bdd;
}catch(Exception $e){
    die("erreur de connexion : ". $e->getMessage());
}

?>