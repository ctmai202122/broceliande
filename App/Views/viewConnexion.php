<?php
include_once(__DIR__ . '/viewHeader.php');
?>

<main class="accueil">
    <form method="post" action="?action=connexion">
     
        <div class="champsSaisie">
            <label for="email">Email </label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="champsSaisie">
            <label for="motdepasse">Mots de passe</label>
            <input type="password" id="motdepasse" name="motdepasse" required>
        </div>
        <div class="champsSaisie">
            <button type="submit" name="envoyer">Envoyer</button>
        </div>
    </form>
</main>

<?php
include_once(__DIR__ . '/viewFooter.php');
?>