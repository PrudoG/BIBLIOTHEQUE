<?php 
include("connexion.php");
if(isset($_POST['ajouter'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $photo=$_POST['photo'];
    $ville=$_POST['ville'];
    $adr=$_POST['adresse'];
    $tel=$_POST['tel'];
    $mail=$_POST['mail'];
    $password=$_POST['mdp'];
    $statut=$_POST['statut'];
    $naissance=$_POST['date'];
    $expiration=$_POST['date_exp'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Adherant</title>
</head>
<body>
    <div class="container">
        <div class="row">
            
        </div>
        <form action="" method="post" class="bg-dark p-5  shadow mx-auto mt-5" >
        <h2 class=" text-warning">Nouvel Adhérant</h2>
            <div class="row">
                <div class="col-4 col-md-4 col-lg-4">
                    <input type="text" class="form-control" name="nom" placeholder="Nom">
                </div>
                <div class="col-4 col-md-4 col-lg-4">
                    <input type="text" class="form-control" name="prenom" placeholder="Prenom">
                </div>
                <div class="col-4 col-md-4 col-lg-4">
                    <div class="input-group">
                        <div class="input-group-text bg-primary text-white border-primary ">Date de naissance</div>
                        <input type="date" class="form-control" name="date">
                    </div>                
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4 col-md-4 col-lg-4">
                    <input type="text" class="form-control" name="ville" placeholder="Ville">
                </div>
                <div class="col-4 col-md-4 col-lg-4">
                    <input type="text" class="form-control" name="adresse" placeholder="Adresse">
                </div>
                <div class="col-4 col-md-4 col-lg-4">
                    <input type="text" class="form-control" name="tel" placeholder="Télephone">
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-6 col-md-6 col-lg-6">
                    <input type="email" class="form-control" name="mail" placeholder="exemple@gmail.com">
                </div>
                <div class="col-6 col-md-6 col-lg-6">
                    <input type="password" class="form-control " name="mdp" placeholder="Mot de passe">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4 col-md-4 col-lg-4">
                    <input type="file" class="form-control" name="photo">
                </div>
                <div class="col-4 col-md-4 col-lg-4">
                    <input type="text" class="form-control" name="statut" placeholder="statut">
                </div>
                <div class="col-4 col-md-4 col-lg-4">
                    <div class="input-group">
                        <div class="input-group-text bg-danger border-danger text-white">Date d'expiration</div>
                        <input type="date" class="form-control" name="date_exp"  id="datexp">
                    </div>
                </div>
                <div class="row mt-3">
                    <button type="submit" class=" btn btn-warning col-12 col-md-12 col-lg-12 rounded-pill ms-2" name="ajouter" >S'adhérer</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>