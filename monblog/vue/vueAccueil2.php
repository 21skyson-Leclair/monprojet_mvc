<header>
    <?php 
    $id = intval($_GET['id']);
    $billet = getBillet($id);//require 'Modele/Model.php';  ?>
<a href="<?= "index.php?action=billet&id=" . $billet['id'] ?>">
<h1 class="titreBillet"><?= $billet['titre'] ?></h1></a>
    <time><?= $billet['date'] ?></time>
</header>
<?php $titre = 'Mon Blog'; ?>
<?php ob_start(); ?>
<?php 
    foreach ($billets as $billet): 
?>
<article>
    <header>
        <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
        <time><?= $billet['date'] ?></time>
    </header>
    <p><?= $billet['contenu'] ?></p>
</article>
<hr />
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'vue/gabarit.php'; ?>