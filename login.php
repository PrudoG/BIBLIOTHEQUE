<?php 
include("connexion.php");
if(isset($_POST['connexion'])){
    
    $mail=$_POST['mail'];
    $password=$_POST['mdp'];
}
if(isset($_POST['nouveau'])){
    header("location: inscription.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Logins</title>
</head>

<body>
    <div class="container ">
        <form action="" method="post" class=" shadow-lg p-5  bg-dark  rounded mt-5 w-50 mx-auto">
            <h2 class=" text-warning">Connexion</h2>
            <div class="row  mt-3">
                <div class="col-12 col-md-12 col-lg-12">
                    <input type="email" class="form-control text-light  text-primary" name="mail" placeholder="Email">
                </div>
            </div>
            <div class="row  mt-3">
                <div class="col-12 col-md-12 col-lg-12">
                    <input type="password" class="form-control text-light " name="mdp" placeholder="mot de passe">
                </div>
            </div>
            <div class="row  mt-3 ">
       
                <input type="submit" class="btn btn-warning  mx-auto col-12 col-md-12 col-lg-6 rounded-pill text-white fs-5 fw-bold" name="connexion" value="Connexion">
 
            </div>
          
        </form>

        <form action="" method="post" class=" shadow-lg p-5  bg-dark   mt-5 w-50 mx-auto">
            <h3 class="text-white fs-10 text-center"> Vous n’avez pas de compte ?</h3>
            <div class="row">
                <button type="submit" name="nouveau" class="btn btn-warning text-white col-12 col-md-12 col-lg-6 rounded-pill mx-auto fw-bold">
                    Création de compte
                </button>
            </div>        
        </form>
    </div>
     
</body>
</html>