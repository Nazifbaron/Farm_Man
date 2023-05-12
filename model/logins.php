<?php
session_start();
require "connexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
 
    $maxTentatives = 2;

    // Vérification de la présence de la variable de session "tentatives"
    if (!isset($_SESSION['tentatives'])) 
    {
        $_SESSION['tentatives'] = 0;
        $_SESSION['blocked_time'] = time(); // Nouvelle variable pour stocker le temps de blocage
    }

    if ($_SESSION['tentatives'] >= $maxTentatives)
     {
        // Vérification du temps de blocage
        $blockedTime = isset($_SESSION['blocked_time']) ? $_SESSION['blocked_time'] : 0;
        if (time() - $blockedTime < 120)    
        { // Bloqué pour 2 minutes
            echo '<script> alert("Trois tentatives sans succès ! Votre compte a été momentanément bloqué pour 2 minutes!"),
            window.location = "../views/home.php" ; </script>';
            //return;
        } else {
            // Réinitialisation des tentatives et de la variable de blocage
            $_SESSION['tentatives'] = 0;
            unset($_SESSION['blocked_time']);
        }
    }


    // Vérification du nombre de tentatives
    if ($_SESSION['tentatives'] < $maxTentatives)
    {
  
  $email = htmlspecialchars($_POST["email"]);
  $password = sha1($_POST["password"]);

  
  if (empty($email) || empty($password)) 
  {
    $_SESSION['error']= "Veuillez renseigner tous les champs.";
    header("location:../views/partials/connexion.php");
   //echo "Veuillez renseigner tous les champs.";

  } 
  else 
  {
   
    $sql = "SELECT * FROM client WHERE email='$email' AND mdp='$password'";
    $result = $bdd->prepare($sql);
    $result->execute(array($email, $password));
    $user = $result->fetch();
    
  

    if ($result->rowCount() > 0) {
      $_SESSION["email"] = $user['email'];
      $_SESSION["id"] = $user['idCli'];
      $_SESSION["mdp"] = $user['mdp'];

      header("location: ../views/cart-page.php");
    } 
    else 
    {
        $_SESSION['tentatives']++;
      $_SESSION['error']= "L'email ou mot de passe incorrect.";
     header("location:../views/partials/connexion.php");
    }

    
  }
}


 }
