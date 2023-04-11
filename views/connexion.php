<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Untitled</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="./embed/fonts/fontawesome5-overrides.min.css" />
    <link rel="stylesheet" href="./embed/fonts/fontawesome5-overrides.min.css" />
    <link rel="stylesheet" href="Login-Form-Clean.css" />
    <link rel="stylesheet" href="Registration-Form-with-Photo.css" />
    <link rel="stylesheet" href="styles.css" />
</head>
<style>
    .login-clean {
  background: #f1f7fc;
  padding: 80px 0;
}

.login-clean form {
  max-width: 320px;
  width: 90%;
  margin: 0 auto;
  background-color: #ffffff;
  padding: 40px;
  border-radius: 4px;
  color: #505e6c;
  box-shadow: 1px 1px 5px rgba(0,0,0,0.1);
}

.login-clean .illustration {
  text-align: center;
  padding: 0 0 20px;
  font-size: 100px;
  color: rgb(244,71,107);
}

.login-clean form .form-control {
  background: #f7f9fc;
  border: none;
  border-bottom: 1px solid #dfe7f1;
  border-radius: 0;
  box-shadow: none;
  outline: none;
  color: inherit;
  text-indent: 8px;
  height: 42px;
}

.login-clean form .btn-primary {
  background: #f4476b;
  border: none;
  border-radius: 4px;
  padding: 11px;
  box-shadow: none;
  margin-top: 26px;
  text-shadow: none;
  outline: none !important;
}

.login-clean form .btn-primary:hover, .login-clean form .btn-primary:active {
  background: #eb3b60;
}

.login-clean form .btn-primary:active {
  transform: translateY(1px);
}

.login-clean form .forgot {
  display: block;
  text-align: center;
  font-size: 12px;
  color: #6f7a85;
  opacity: 0.9;
  text-decoration: none;
}

.login-clean form .forgot:hover, .login-clean form .forgot:active {
  opacity: 1;
  text-decoration: none;
}
</style>
<body>
    <div class="login-clean">
        <form method="post" action="login.php">
            <h2 class="sr-only">Connexion</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div><br>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="@Email" /></div><br>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="@Password" /></div><br>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit"> Se Connecter</button></form>
    </div>
</body>

</html>