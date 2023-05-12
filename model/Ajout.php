<?php
session_start();
require_once("connexion.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
        $nom =htmlspecialchars($_POST['nom']);
        $prenom =htmlspecialchars($_POST['prenom']);
        $telephone =htmlspecialchars($_POST['telephone']);
        $email =htmlspecialchars($_POST['email']);
        $ville =htmlspecialchars($_POST['ville']);
        $password = sha1($_POST['password']);
        $conf_password = sha1($_POST['conf_password']);


  if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['telephone']) && !empty($_POST['email']) && !empty($_POST['ville'])
    && !empty($_POST['password']) && !empty($_POST['conf_password'])) {

      if ($password != $conf_password) {
        $_SESSION['error']= "Les mots de passe ne correspondent pas.";
        header('location:../views/partials/inscription.php');
      } else {
        
        $sql = 'SELECT * FROM client WHERE email=? AND mdp=?';
        $result = $bdd->prepare($sql);
        $result->execute(array($email, $password));
  
        if ($result->rowCount() > 0) {
          $_SESSION['error']= "Cet utilisateur existe déjà";
          
        } else {
          
          $sql = "INSERT INTO client(nomCli,prenomCli,telephone,email,villeCli,mdp) VALUES (?,?,?,?,?,?)";
          $result = $bdd->prepare($sql);
          $result->execute(array($nom, $prenom ,$telephone, $email, $ville,$password));
    
          $_SESSION['success']= "Inscription réussie.";
          header('location:../views/home.php');
        }
  
        // Fermer la connexion à la base de données
        
      }

  } else {

    $_SESSION['error']= "Veuillez remplir tous les champs.";
    header('location:../views/partials/inscription.php');
      }
}



?>