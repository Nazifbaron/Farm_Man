<?php
require_once("connexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
        $nom =htmlspecialchars($_POST['nom']);
        $prenom =htmlspecialchars($_POST['prenom']);
        $telephone =htmlspecialchars($_POST['telephone']);
        $email =htmlspecialchars($_POST['email']);
        $ville =htmlspecialchars($_POST['ville']);
        $password = sha1($_POST['password']);
        $conf_password = sha1($_POST['conf_password']);


  if (empty($_POST['nom']) && empty($_POST['prenom']) && empty($_POST['telephone']) && empty($_POST['email']) && empty($_POST['ville'])
    && empty($_POST['password']) && empty($_POST['conf_password'])) {

    echo "Veuillez remplir tous les champs.";

  } else {
    
    if ($password != $conf_password) {
      echo "Les mots de passe ne correspondent pas.";
    } else {
      
      $sql = 'SELECT * FROM Client WHERE email=? AND mdp=?';
      $result = $bdd->prepare($sql);
      $result->execute(array($email, $password));

      if ($result->rowCount() > 0) {
        echo "<script> alert('Cet utilisateur existe déjà');</script> .";
        
      } else {
        
        $sql = "INSERT INTO Client (nomCli, prenomCli, telephone, email, villeCli, mdp) VALUES ('$nom','$prenom','$telephone','$email','$ville', '$password')";
        $result = $bdd->prepare($sql);
        $result->execute(array($nom, $prenom ,$telephone, $email, $ville,$password));
  
        echo "Inscription réussie.";
      }

      // Fermer la connexion à la base de données
      
    }
  }
}

?>