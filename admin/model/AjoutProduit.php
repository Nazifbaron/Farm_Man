<?php
   require_once "connexion.php";

   if(isset($_POST['envoie'])){
        if(empty($_POST['nom']) || empty($_POST['categorie']) || empty($_POST['quantite']) || empty($_POST['prix'])){
            echo "Veuillez remplir tout les champs";
        }else{
            $nom=htmlspecialchars($_POST['nom']);
            $categorie=htmlspecialchars($_POST['categorie']);
            $quantite=htmlspecialchars($_POST['quantite']);
            $prix=htmlspecialchars($_POST['prix']);
            
            $sql='INSERT INTO Produit(nomPr,categorie,quantitePr,prixU) VALUES(?, ?, ?, ?)';
            $req = $bdd->prepare($sql);
            $req->execute(array($nom, $categorie, $quantite, $prix));

            if ($req->rowCount() > 0) {
                echo "<script> alert('Ajout éffectué avec succès');</script> .";  
              } else{
                echo "<script> alert('Une erreur s\'est produite lors de l'ajout');</script> ."; 
              }

        }
   }
?>