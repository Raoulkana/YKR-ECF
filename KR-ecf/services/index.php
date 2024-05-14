<?php
$title = 'Présentation des services du zoo';

require_once __DIR__ . '/../inc/bootstrap.php';
require_once __DIR__ . '/../inc/header.php';

$services = \DB::getServices();
?>

<link rel="stylesheet" href="/services/style3.css">

<header>
    <h1>Bienvenue au Zoo!</h1>
    <p>Découvrez tous nos services</p>
</header>

<section id="services">
    <?php foreach ($services as $service) : ?>
    <div class="service">
        <h2><?= $service['nom']; ?></h2>
        <p><?= $service['description']; ?></p>
    </div>
    <?php endforeach; ?>
</section>

<section class="images">
    <img src="/services/image/resto.jpg" alt="restauration">
    <img src="/services/image/train.jpg" alt="transport">
    <img src="/services/image/visite.jpg" alt="visite">

</section>

<?php require_once __DIR__ . '/../inc/footer.php';
