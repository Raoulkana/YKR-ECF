<?php
$title = 'Présentation des animaux du zoo';

require_once __DIR__ . '/../inc/bootstrap.php';
require_once __DIR__ . '/../inc/header.php';

$animaux = \DB::getAnimaux();
?>

<link rel="stylesheet" href="/animaux/style7.css">

<header>
    <h1>Bienvenue au Zoo!</h1>
    <p>Découvrez tous nos Animaux</p>
</header>

<section id="animaux">
    <?php foreach ($animaux as $animal) : ?>
    <div class="animal">
        <h2><?= $animal['prenom']; ?></h2>
        <p><?= $animal['etat']; ?></p>
    </div>
    <?php endforeach; ?>
</section>

<?php require_once __DIR__ . '/../inc/footer.php';
