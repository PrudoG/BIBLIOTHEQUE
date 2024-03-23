<?php 
include("connexion.php");
if(isset($_POST['inscription'])){
    
    $mail=$_POST['mail'];
    $password=$_POST['mdp'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Login</title>
</head>
<body>
    <div class="container ">
        <form action="" method="post" class=" shadow-lg p-5  bg-dark  rounded mt-5 w-50 mx-auto">
            <h2 class=" text-warning">Login</h2>
            <div class="row justify-content-center mt-3">
                <div class="col-12 col-md-12 col-lg-12">
                    <input type="email" class="form-control text-light  text-primary" name="mail" placeholder="Email">
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-12 col-md-12 col-lg-12">
                    <input type="password" class="form-control text-light " name="mdp" placeholder="mot de passe">
                </div>
            </div>
            <div class="row justify-content-center mt-3">
       
                <input type="submit" class="btn btn-warning  col-12 col-md-12 col-lg-12 rounded-pill text-white fs-5" name="inscription" value="Connexion">
 
            </div>
          
        </form>
    </div>
     
</body>
</html>