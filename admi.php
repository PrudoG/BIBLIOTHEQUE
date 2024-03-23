<?php 
include("connexion.php");
if(isset($_POST['inscription'])){
    $nom=$_POST['nom'];
    $mail=$_POST['mail'];
    $password=$_POST['mdp'];
    $cfrpassword=$_POST['cmdp'];
    $photo=$_POST['photo'];
    if($password == $cfrpassword){
        echo "connexion good";
    }
    else{
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Inscription Administrateur</title>
</head>
<body>
    <div class="container ">
        <form action="" method="post" class=" shadow-sm p-5  bg-dark  rounded mt-5 w-50 mx-auto">
            <h2 class=" text-warning">Inscription Administrateur</h2>
            <div class="row justify-content-center mt-3">
                <div class="col-12 col-md-12 col-lg-12">
                    <input type="text" class="form-control text-light  " name="nom" placeholder="Nom">
                </div>
            </div>
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
                <div class="col-12 col-md-12 col-lg-12">
                    <input type="password" class="form-control text-light " name="cmdp" placeholder="confirmer votre mot de passe">
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-12 col-md-12 col-lg-12">
                    <input type="file" class="form-control text-light " name="photo">
                </div>
            </div>
            <div class="row justify-content-center mt-3">
       
                <input type="submit" class="btn btn-warning  col-12 col-md-12 col-lg-12 rounded-pill text-white fs-5" name="inscription" value="s'inscrire ">
 
            </div>
          
        </form>
    </div>
     
</body>
</html>