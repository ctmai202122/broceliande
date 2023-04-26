<?php
// Inclusion du fichier de vue pour l'en-tête
include_once(__DIR__ . '/viewHeader.php');
?>

<!-- // Affichage des informations de la contrée -->
<main class="container">
    <div class="detailsLegende">
        <h1><?= $legende['titre'] ?></h1>
        <p>Description : <?= $legende['contenu'] ?></p>
        <img src="Data/images/<?= $legende['photo'] ?>" alt="<?= $legende['titre'] ?>">
    </div>
</main>

<?php
// Inclusion du fichier de vue pour le pied de page
include_once(__DIR__ . '/viewFooter.php');
?> 