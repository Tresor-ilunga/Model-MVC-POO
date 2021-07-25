<?php
$title = "Accueil";
ob_start();
?>

<section class="container">

    <h1>Avis</h1>

    <form action="index.php?page=avis" method="post">
        <p>
            <label for="note">Note / 5</label><br>
            <input type="number" name="note" id="note">
        </p>
        <p>
            <label for="message">Message</label><br>
            <textarea name="message" id="message"></textarea>
        </p>
        <p>
            <input type="submit" name="" id="" value="Ajouter un avis">
        </p>
    </form>

    <p>Voici la liste des avis :</p>

    <?php
    while($avis = $requete->fetch()){
        ?>
        <p>
            <b><?= $avis['note'] ?> / 5</b><br>
            <?= $avis['content'] ?>
        </p>
        <?php
    }
    ?>

</section>

<?php
$content = ob_get_clean();

require 'base.php';
?>
