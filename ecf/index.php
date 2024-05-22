<?php
$title = 'ARCADIA zoo';

require_once __DIR__ . '/inc/bootstrap.php';
require_once __DIR__ . '/inc/header.php'; ?>

<section class="rk d-flex justify-content-center align-items-center pt-5">
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 rk-desc">
                <h1 class="text capitalize py-3 dancing script">
                <strong>PRÉSENTATION DU ZOO ARCADIA:</strong>
                    <p>Arcadia est un zoo situé en france près de la Forêt de Brocéliande, en bretagne deppuis 1960.
                    Ils possèdent tout un panel d'annimaux, reparti par habitats.
                    Chaque jour, plusieurs vétérinaires viennent afin d'effectuer les Contrôles
                    sur chaque animal avant l'ouverture du zoo pour s'assurer que tout se passe bien.
                    </p>

                </h1>
            </div>
        </div>
    </div>

</section>
<section class="gk Montserrat py-5">
    <div class="container">
    <div class="row">
        <div class="card mb-3 border-0 rounded-0">
        <div class="row">
            <div class="col-md-6">
            <img src="/assets/images/g2.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title">
                <strong>LES DIFFÉRENTS HABITATS</strong>
                </h5>
                <p class="card-text"> ARCADIA est un lieu où vous pouvez observer et en apprendre davantage sur de nombreuses
                    espèces animales provenant du monde entier, il est conçue pour reproduire l'habitat naturel des animaux
                    offrant ainsi aux visiteurs une expérience immersive. Voici quelques-unes des zones typique que vous pourriez
                    trouver dans le zoo :
                <ol>
                    <li>LA SAVANE</li>
                    <li>LA JUNGLE</li>
                    <li>LES MARAIS</li>
                </ol>
                </p>
            </div>
            </div>
        </div>
        </div>

        <div class="card my-5 border-0 rounded-0">
        <div class="row">
            <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title">
                <strong>LES ANIMAUX</strong>
                </h5>
                <p class="card-text">
                    Au sein du zoo ARCADIA, vous trouverez une variété d'animaux fascinants provenant du monde entier.
                    Voici quelques exemples d'animaux que vous pourriez rencontrer lors de votre visite :
                    <ol>
                        <li>Les Mammifères</li>b
                        <li>Les Oiseaux</li>
                        <li>Les Reptiles et Animaux Marins </li>
                        <li>Les Amphibiens</li>
                        <li>Les Invertébrés</li>
                    </ol>
                </p>
            </div>
            </div>
            <div class="col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/images/r7.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/r9.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/ac1.jpg" class="d-block w-100" alt="...">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
            </div>
        </div>
        </div>

        <div class="card mb-3 border-0 rounded-0">
        <div class="row">
            <div class="col-md-6">
            <img src="/assets/images/n1.jpg" class="img-fluid rounded-start" alt="...">
            <img src="/assets/images/r4.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title">
                    <strong>LES DIFFÉRENTS SERVICES</strong>
                </h5>
                <p class="card-text">Le zoo offrent une variété de services pour améliorer l'expérience
                    des visiteurs et assurer le bien-être des animaux. Voici quelques-uns des services
                    typique que vous pourriez trouver chez nous :
                    <ol>
                        <li>RESTAURATION</li>
                        <li>GUIDES ET VISITES DES HABITATS</li>
                        <li>SERVICES DE TRANSPORT</li>
                    </ol>
                </p>
            </div>
            </div>
        </div>
        </div>

    </div>
    </div>
</section>

<section class="reviews-section">
    <h2>Avis de nos Visiteurs :</h2>
    <div class="review">
        <img src="/assets/images/avis/per1.jpg" alt="photo grace">

        <div class="review-details">

        <div class="review-name">GRACE</div>
        <div class="review-rating">★★★★☆</div>
        <div class="review-text">J'ai vraiment apprécié ma viste au zoo, les animaux semblaient en bonne santé
            et les étaient bien entretenus.
        </div>

        </div>
    </div>
    <div class="review">
        <img src="/assets/images/avis/per3.jpg" alt="photo Marie">

        <div class="review-details">

        <div class="review-name">Marie </div>
        <div class="review-rating">★★★☆</div>
        <div class="review-text">C'était une bonne expérience, j'ai été impressionné par les programmes éducatifs proposés, notamment
            la présentation des espèces en voie de disparition.
        </div>
        </div>
    </div>

    <div class="review">
        <img src="/assets/images/avis/per2.jpg" alt="photo mirielle">

        <div class="review-details">
        <div class="review-name">Joseph</div>
        <div class="review-rating">★★★☆</div>
        <div class="review-text">Le service était excellent, le personnel était très accueillant et a répondu à toutes nos questions sur les animaux
            Je recommande ce zoo pour une sortie en famille</div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/inc/footer.php';
