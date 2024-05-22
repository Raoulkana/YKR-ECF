<?php
require_once __DIR__ . '/../inc/bootstrap.php';

$animaux = \DB::getAnimaux();

require_once __DIR__ .'/../inc/header.php';
?>

<link rel="stylesheet" href="/admin/animaux/animaux.css">

<body>
  <a href="/admin/animaux/edit"><mark>AJOUTER UN ANIMAL</mark></a>
  <ul>
    <?php foreach ($animaux as $animal) : ?>
        <li>
            <a href="/admin/animaux/edit?animal_id=<?=$animal['animal_id']; ?>"><?= $animal['prenom']; ?></a>
            <a href="/admin/animaux/edit?animal_id=<?= $animal['animal_id']; ?>&action=delete">supprimer</a>
        </li>
    <?php endforeach; ?>
  </ul>
</body>


<?php
require_once __DIR__ .'/../inc/footer.php';



