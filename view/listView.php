<?php
$title = "Témoignages";

ob_start();

?>

<section class="container">

    <h1>Bienvenue sur Devscast</h1>
    <p>Voici la liste des utilisateurs :</p>

    <?php
    while($utilisateurs = $requete->fetch()){
        ?>
        <p><b><?= $utilisateurs['first_name'] ?> <?= $utilisateurs['name'] ?></b> : <?= $utilisateurs['email'] ?></p>
        <?php
    }
    ?>

</section>

<?php
$content = ob_get_clean();

require 'base.php';
?>