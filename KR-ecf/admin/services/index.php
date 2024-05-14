<?php
require_once __DIR__ . '/../inc/bootstrap.php';

$services = \DB::getServices();

require_once __DIR__ .'/../inc/header.php';
?>

<link rel="stylesheet" href="/admin/services/services.css">

<body>
  <a href="/admin/services/edit"><mark>AJOUTER UN SERVICE</mark></a>
  <ul>
    <?php foreach ($services as $service) : ?>
        <li>
            <a href="/admin/services/edit?service_id=<?=$service['service_id']; ?>"><?= $service['nom']; ?></a>
            <a href="/admin/services/edit?service_id=<?= $service['service_id']; ?>&action=delete">supprimer</a>
        </li>
    <?php endforeach; ?>
  </ul>
</body>


<?php
require_once __DIR__ .'/../inc/footer.php';



