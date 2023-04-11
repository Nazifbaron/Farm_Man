<?php
require "connexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $email = htmlspecialchars($_POST["email"]);
  $password = sha1($_POST["password"]);

  
  if (empty($email) || empty($password)) {
    echo "Veuillez remplir tous les champs.";
  } else {
   
    $sql = "SELECT * FROM Client WHERE email='$email' AND mdp='$password'";
    $result = $bdd->prepare($sql);
    $result->execute(array($email, $password));

    if ($result->rowCount() > 0) {
      
      session_start();
      $_SESSION["email"] = $email;
      header("location: dashboard.php");
    } else {
      echo "L'email ou mot de passe incorrect.";
    }

    
  }
}

?>