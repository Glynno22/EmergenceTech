<?php 
    $connection;
    try {
        $connection= new PDO ("mysql:host=localhost; dbname=Miage", "root", "root");
        // echo("Connexion reussie");
    } catch (PDOException $e) {
        echo("Echec de connection");
    }
?>