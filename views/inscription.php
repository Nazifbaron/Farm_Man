<?php

?>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>new</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="./embed/fonts/fontawesome5-overrides.min.css" />
    <link rel="stylesheet" href="./embed/fonts/fontawesome5-overrides.min.css" />
    <link rel="stylesheet" href="Registration-Form-with-Photo.css" />
    <link rel="stylesheet" href="styles.css" />
</head>
<style>
    .register-photo {
        background: #f1f7fc;
        padding: 80px 0;
    }
    .register-photo 
    .form-container {
        display: table;
        max-width: 900px;
        width: 90%;
        margin: 0 auto;
        box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
    }
    .register-photo form{
        display: table-cell;
        width: 400px;
        background-color: moccasin;
        padding: 40px 60px;
        color: #505e6c;
    }
    @media (max-width:991px){ 
    .register-photo form{
        padding: 40px;
    }
}
    .register-photo form h2 {
        font-size: 24px;
        line-height: 1.5;
        margin-bottom: 30px;
    }
    .register-photo form .form-control {
        background: #f7f9fc;
        border: none;
        border-bottom: 1px solid #dfe7f1;
        border-radius: 0;
        box-shadow: none;
        outline: none;
        color: inherit;
        text-indent: 6px;
        height: 40px;
    }
    .register-photo form .form-check {
        font-size: 13px;
        line-height: 20px;
    }
    .register-photo form .btn-primary{
        background: #f4476b;
        border: none;
        border-radius: 4px;
        padding: 11px;
        box-shadow: none;
        margin-top: 35px;
        text-shadow: none;
        outline: none !important;
    }
    .register-photo form .btn-primary:hover,
    .register-photo form .btn-primary:active {
        background: #eb3b60;
    }
    .register-photo form .btn-primary:active {
        transform:translateY(1px);
    }
    .register-photo form 
    .already {
        display: block;
        text-align: center;
        font-size: 12px;
        color: #6f7a85;
        opacity: 0.9;
        text-decoration: none;
    }
</style>

<body>
    <div class="register-photo">
        <div class="form-container">
            
            <form method="post" action="../model/Ajout.php">
                <h2 class="text-center"><strong>Inscrivez-vous</strong> </h2>
                <div class="form-group"><input class="form-control" type="text" name="nom" placeholder="@Nom" /></div><br>
                <div class="form-group"><input class="form-control" type="text" name="prenom" placeholder="@Prenom" /></div><br>
                <div class="form-group"><input class="form-control" type="number" name="telephone" placeholder="@Telephone" /></div><br>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="@Email" /></div><br>
                <div class="form-group"><input class="form-control" type="text" name="ville" placeholder="@Ville" /></div><br>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" /></div><br>
                <div class="form-group"><input class="form-control" type="password" name="conf_password" placeholder="@Confirmer Password (repeat)" /></div><br>

                
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="envoie">Envoyer</button></div><a class="already" href="#">Vous avez déjà un compte ? Connectez-vous ici.</a></form>
        </div>
    </div>
</body>

</html>
