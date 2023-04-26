<?php
// Inclusion du fichier de vue pour l'en-tête
include_once(__DIR__ . '/viewHeader.php');
?>

<!-- // Affichage des informations de la contrée -->
<main class="container">
    <div class="detailsContree">
        <h1><?= $contree['titre'] ?></h1>
        <p>Description : <?= $contree['contenu'] ?></p>
        <img src="./Data/images/<?= $contree['photo'] ?>" alt="<?= $contree['titre'] ?>">
        <p>Latitude : <?= $contree['latitude'] ?></p>
        <p>Longitude : <?= $contree['longitude'] ?></p>
        <p>Commune : <?= $contree['commune'] ?></p>
        <p>Accessibilité : <?= $contree['accessibilite'] ?></p>
        <p>Ouverture : <?= $contree['ouverture'] ?></p>
    </div>
</main>

<?php
// Inclusion du fichier de vue pour le pied de page
include_once(__DIR__ . '/viewFooter.php');
?>