<?php
use Broceliande\Models\Legende;

          
            // Récupérer l'identifiant de la contree depuis l'URL
            $id = $_GET['id'];

            // Récupérer toutes les informations de la contree correspondante depuis la base de données
            $legende = Legende::getById($id);

    // Inclusion de la vue pour les détails de la contree
    include_once('App/Views/viewDetailsLegende.php');
    //pour la version en ligne remplacer cette ligne :
    // include_once(__DIR__ . '/Views/viewDetailsLegende.php');
?>