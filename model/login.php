<?php
session_start();
require "connexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $email = htmlspecialchars($_POST["email"]);
  $password = sha1($_POST["password"]);

  
  if (empty($email) || empty($password)) {
    $_SESSION['error']= "Veuillez remplir tous les champs.";
    header("location: ../views/home.php");

  } else {
   
    $sql = "SELECT * FROM client WHERE email='$email' AND mdp='$password'";
    $result = $bdd->prepare($sql);
    $result->execute(array($email, $password));

    if ($result->rowCount() > 0) {
      
      session_start();
      $_SESSION["email"] = $email;
      header("location: ../views/dashboard.php");
    } else {
      $_SESSION['error']= "L'email ou mot de passe incorrect.";
    }

    
  }
}

?>