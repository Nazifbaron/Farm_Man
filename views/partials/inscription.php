<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../admin/dist/css/styles.css">
    <style>
        body{
    background-color: #4e9a06;
}

.registration-form{
	padding: 50px 0;
}

.registration-form form{
    background-color: #fff;
    max-width: 600px;
    margin: auto;
    padding: 50px 70px;
    border-radius: 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .logo{
	
    margin-left: 80px;
   
}

.registration-form .item{
	border-radius: 20px;
    margin-bottom: 25px;
    padding: 10px 20px;
}

.registration-form .create-account{
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    background-color: #5791ff;
    border: none;
    color: white;
    margin-top: 20px;
}

.registration-form .social-media{
    max-width: 600px;
    background-color: #fff;
    margin: auto;
    padding: 35px 0;
    text-align: center;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    color: #9fadca;
    border-top: 1px solid #dee9ff;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}

.registration-form .social-icons{
    margin-top: 30px;
    margin-bottom: 16px;
}


.registration-form .social-icons a{
    font-size: 23px;
    margin: 0 3px;
    color: #5691ff;
    border: 1px solid;
    border-radius: 50%;
    width: 45px;
    display: inline-block;
    height: 45px;
    text-align: center;
    background-color: #fff;
    line-height: 45px;
}

.registration-form .social-icons a:hover{
    text-decoration: none;
    opacity: 0.6;
}

@media (max-width: 576px) {
    .registration-form form{
        padding: 50px 20px;
    }

    .registration-form .logo{
      margin-left: 20px;
    }
}
    </style>
</head>
<body>
    <div class="registration-form">
    <?php include('../../admin/view/error_success.php'); ?>
        
        <form method="post" action="../../model/Ajout.php" >
            <div class="logo">
                <img style="border-radius:2em;" src="../../admin/medias/log.png" alt="farm-logo" >
            </div><br><br>
            <div class="form-group">
                <input type="text" class="form-control item" placeholder="@Nom" name="nom" id="nom">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" placeholder="@Prenom" name="prenom" id="prenom">
            </div>
            <div class="form-group">
                <input type="number" class="form-control item" placeholder="@Telephone" name="telephone" id="telephone">
            </div>
            <div class="form-group">
                <input type="mail" class="form-control item" placeholder="@Email" name="email" id="email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" placeholder="@Ville" name="ville" id="ville">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" placeholder="@Password" name="password" id="password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" placeholder="@Confirmer Password" name="conf_password" id="conf_password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account" name="envoie">S'incrire</button>
            </div>
            Vous avez déjà un compte <br>
            <a href="connexion.php">Connectez-vous</a> 
           
           
        </form>
        
        
           
        
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function(){
  $('#birth-date').mask('00/00/0000');
  $('#phone-number').mask('0000-0000');
 })
    </script>
</body>
</html>

   
