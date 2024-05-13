<?php
require_once __DIR__ . '/../inc/bootstrap.php';

$services = \DB::getServices();

require_once __DIR__ .'/../inc/header.php';
?>

<a href="/admin/services/edit">Ajouter un service</a>

<ul>
    <?php foreach ($services as $service) : ?>
        <li>
            <a href="/admin/services/edit?service_id=<?=$service['service_id']; ?>"><?= $service['nom']; ?></a>
        </li>
    <?php endforeach; ?>
</ul>

<?php
require_once __DIR__ .'/../inc/footer.php';


