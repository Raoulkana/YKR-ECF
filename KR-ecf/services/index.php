<?php
$title = 'Présentation des services du zoo';

require_once __DIR__ . '/../inc/bootstrap.php';
require_once __DIR__ . '/../inc/header.php'; ?>

<link rel="stylesheet" href="/services/style3.css">

<header>
    <h1>Bienvenue au Zoo!</h1>
    <p>Découvrez tous nos services</p>
</header>

<section id="services">
    <div class="service">
        <img src="/services/photo/visite.jpg" alt="Visites guidées">
        <h2>VISITE GUIDÉES </h2>
        <p>Profitez de visites guidées avec nos experts pour en apprendre davantage sur les animaux et les efforts de conservation.
        </p>
    </div>

    <div class="service">
        <h2>SERVICE DE TRANSPORT </h2>
        <p>Voyager à travers le zoo : Le trajet en train propose une promenade paisible à travers différentes parties
            du zoo, offrant aux visiteurs des vues uniques sur les habitats d'animaux et les expositions.
        </p>
    </div>
    <div class="service">
        <h2>RESTAURATION</h2>
        <p>Profitez d'un choix varié de restaurants et de stands de nourriture.</p>
    </div>
</section>

<?php require_once __DIR__ . '/../inc/footer.php';
