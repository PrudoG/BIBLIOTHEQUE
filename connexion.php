<?php
    $host = 'localhost';
    $username ='root';
    $password ='';
    $dbname ='BIBLIOTHEQUE';
    $dsn = "mysql:host=$host;dbname=$dbname";

    try{
        $dbh = new PDO($dsn, $username, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'Connexion reussie';
    }

    catch(PDOException $e){
        echo "Erreur :". $e->getMessage();
    }
?>