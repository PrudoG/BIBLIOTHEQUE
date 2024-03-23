<?php
include("connexion.php");
session_start();
$Id_Auteur=$_SESSION['Id_Auteur'];
$date = date('Y-m-d');
if(isset($_POST['inserer'])){
    // Enregistrement des Elements du formulaire
    $titre=$_POST['titre_livre'];
    $edition=$_POST['edition_livre'];
    $maison_edit=$_POST['Medition_livre'];
    $description=$_POST['descriptions'];
    $categorie=$_POST['categorie'];
    $stock=$_POST['stock'];
    $publication=$_POST['publication'];
    $langue=$_POST['langue'];
    $nbr_page=$_POST['nbr_page'];
    $isbn=$_POST['isbn'];
    $image_cv=$_POST['image_cv'];
    $lien_livre=$_POST['lien_livre'];
    $date_ajout=$_POST['date_ajout'];
    $dispo=$_POST['disponibilite'];

    $sth = $dbh->prepare("INSERT INTO livre(
        Titre_liv, Edition_liv, Maison_Edition_liv, Categorie_liv, ISBN,
        Id_Auteur, Nbr_page, Langue, Image_couv, Descriptions, Anne_pub,
        Nbr_stock, lien, Date_Ajout, Disponibilite) 
    VALUES(:titre_livre, :edition_livre, :Medition_livre, :categorie, :isbn, :id_auteur,
    :nbr_page, :langue, :image_cv, :descriptions, :publication, :stock, :lien_livre, :date_ajout, 
    :disponibilite)");

    $sth->bindParam(':titre_livre', $titre);
    $sth->bindParam(':edition_livre', $edition);
    $sth->bindParam(':Medition_livre', $maison_edit);
    $sth->bindParam(':categorie', $categorie);
    $sth->bindParam(':isbn', $isbn);
    $sth->bindParam(':id_auteur', $Id_Auteur);
    $sth->bindParam(':nbr_page', $nbr_page);
    $sth->bindParam(':langue', $langue);
    $sth->bindParam(':image_cv', $image_cv);
    $sth->bindParam(':descriptions', $description);
    $sth->bindParam(':publication', $publication);
    $sth->bindParam(':stock', $stock);
    $sth->bindParam(':lien_livre', $lien_livre);
    $sth->bindParam(':date_ajout', $date_ajout);
    $sth->bindParam(':disponibilite', $dispo);

    $sth->execute();
    $_SESSION['Id_livre'] = $dbh->lastInsertId();
    header("location: auteur.php");
    

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Enregistrement livres</title>
</head>
<body>
    <div class="container">
        
        <form action="" method="post" class=" shadow bg-dark p-5 mt-5 ">
        <h2 class=" text-warning">Livres</h2>
            <div class="row mt-3">
                <div class="col-4 col-md-4 col-lg-4">
                    <input type="text" class="form-control" name="titre_livre" placeholder=" Titre ">
                </div>
                <div class="col-4 col-md-4 col-lg-4">
                    <input type="number" class="form-control" name="edition_livre" placeholder="Edition">
                </div>
                <div class="col-4 col-md-4 col-lg-4">
                    <input type="texte" class="form-control" name="Medition_livre" placeholder="Maison d'édition">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-8 col-md-8 col-lg-9">
                    <textarea name="descriptions" id="" class="form-control" rows="3" placeholder=" Description"></textarea>
                </div>
                <div class="col-4 col-md-3 col-lg-3">
                    <div class="row gy-2">
                        <div class="col-12 col-md-12 col-lg-12">
                            <input type="text" class="form-control" name="categorie" placeholder=" Catégorie">
                        </div>
                        <div class="col-12 col-md-12 col-lg-12">
                            <input type="text" class="form-control" name="stock" placeholder="Qté Stock">
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-3 col-md-3 col-lg-3">
                    <input type="text" class="form-control" name="publication" placeholder="Année Publication">
                </div>
                <div class="col-3 col-md-3 col-lg-3">
                    <input type="text" class="form-control" name="langue" placeholder="Langue">
                </div>
                <div class="col-3 col-md-3 col-lg-3">
                    <input type="text" class="form-control" name="nbr_page" placeholder="Nombre de Pages">
                </div>
                <div class="col-3 col-md-3 col-lg-3">
                    <input type="text" class="form-control" name="isbn" placeholder="ISBN">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-3 col-md-3 col-lg-3">
                    <input type="file" name="image_cv" id="" class="form-control">
                </div>
                <div class="col-3 col-md-3 col-lg-3">
                    <input type="text" name="lien_livre" id="" class="form-control" placeholder="Lien vers le livre">
                </div>
                <div class="col-3 col-md-3 col-lg-3">
                    <input type="date" name="date_ajout" id="" class="form-control" value="<?php echo $date ;?>">
                </div>
                <div class="col-3 col-md-3 col-lg-3">
                    <input type="text" name="disponibilite" id="" class="form-control" placeholder="Disponibilité">
                </div>
            </div>
            <div class="row mt-3">
                <button type="submit" class="btn btn-warning rounded-pill" name="inserer" >Ajouter</button>
            </div>
        </form>
       
        
    </div>
</body>
</html>