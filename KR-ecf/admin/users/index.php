<?php
require_once __DIR__ . '/../inc/bootstrap.php';

$users = \DB::getUsers();

require_once __DIR__ .'/../inc/header.php';
?>

<a href="/admin/users/edit">Ajouter un utilisateur</a>

<ul>
    <?php foreach ($users as $user) : ?>
        <li>
            <a href="/admin/users/edit?username=<?=$user['username']; ?>"><?= $user['nom']; ?> <?= $user['prenom']; ?></a>
        </li>
    <?php endforeach; ?>
</ul>

<?php
require_once __DIR__ .'/../inc/footer.php';


