<?php
require_once __DIR__ . '/../inc/bootstrap.php';

$users = \DB::getUsers();

require_once __DIR__ .'/../inc/header.php';
?>

<link rel="stylesheet" href="/admin/users/users.css">



<body>
 <a href="/admin/users/edit"><mark>AJOUTER UN UTILISATEUR</mark></a>
 <ul>
    <?php foreach ($users as $user) : ?>
        <li>
            <a href="/admin/users/edit?username=<?=$user['username']; ?>"><?= $user['nom']; ?> <?= $user['prenom']; ?></a>
            <a href="/admin/users/edit?username=<?=$user['username']; ?>&action=delete">supprimer</a>
        </li>
    <?php endforeach; ?>
 </ul>
</body>

<?php
require_once __DIR__ .'/../inc/footer.php';


