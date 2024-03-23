<?php 
include("connexion.php");
session_start();
if(isset($_POST['inserer'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $photo=$_POST['photo'];
    $biographie=$_POST['bio'];
    $nationalite=$_POST['nat'];
    $naissance=$_POST['date_n'];
    $deces=$_POST['date_d'];    

    $sth = $dbh->prepare("INSERT INTO auteur(Nom_Auteur, Prenom_Auteur, Biographie_Auteur, Photo_Auteur, Nationalité, Date_Naissance, Date_Décès) VALUES(:nom, :prenom, :bio, :photo, :nat, :date_n, :date_d)");

    $sth->bindParam(':nom', $nom);
    $sth->bindParam(':prenom', $prenom);
    $sth->bindParam(':bio', $biographie);
    $sth->bindParam(':photo', $photo);
    $sth->bindParam(':nat', $nationalite);
    $sth->bindParam(':date_n', $naissance);
    $sth->bindParam(':date_d', $deces);

    $sth->execute();
    $_SESSION['Id_Auteur'] = $dbh->lastInsertId();
    header("location: livres.php");
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="post" class="shadow mx-auto  bg-dark p-5 w-75 mt-5">
        <h2 class=" text-warning">Auteur</h2>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" name="nom" placeholder="Nom Auteur">
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" name="prenom" placeholder="Prenom Auteur">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-md-12 col-lg-12 ">
                    <textarea name="bio" id="" rows="3" class="form-control text-dark" placeholder="biographie ici"></textarea>

                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-md-6 col-lg-6">
                    <input type="file" class="form-control" name="photo" placeholder="Photo Auteur">
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control" name="nat" placeholder="Nationalité Auteur">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-md-6 col-lg-6">
                    <input type="date" class="form-control" name="date_n">
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <input type="date" class="form-control" name="date_d" >
                </div>
                <div class="row  mt-3">
       
                    <input type="submit" class="btn btn-warning  ms-3 col-12  col-md-12 col-lg-12 rounded-pill text-white " name="inserer" value="Ajouter ">
 
                </div>
            </div>
        </form>
    </div>
</body>
</html>