<?php
require_once __DIR__ . '/../../inc/bootstrap.php';

$user = [
    'username' => '',
    'nom' => '',
    'prenom' => '',
    'password' => '',
];

if (!empty($_REQUEST['username'])) {
    $user = \DB::getUser($_REQUEST['username']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'username' => filter_input(INPUT_POST,'username'),
        'nom' => filter_input(INPUT_POST, 'nom'),
        'prenom' => filter_input(INPUT_POST, 'prenom'),
        'password' => filter_input(INPUT_POST, 'password'),
    ];

    if (empty($user['username'])) {
        if (\DB::createUser($data)) {
            header("Location: /admin/users");
            die;
        }
    } else {
        if (\DB::updateUser($user['username'], $data)) {
            header("Location: /admin/users");
            die;
        }
    }
}

if (isset($_REQUEST['action'])
    && $_REQUEST['action'] == 'delete'
    && !empty($user)) {
    \DB::deleteUser($user['username']);

    header("Location: /admin/users");
    die;
}


require_once __DIR__ .'/../../inc/header.php';
?>
<link rel="stylesheet" href="/admin/users/users.css">

<section>
 <form action="" method='post'>
    <label>
        <span>Username</span>
        <input type="text" name='username' required value='<?= $user['username']; ?>' <?= empty($user['username']) ? '' : 'disabled' ?> />
    </label>

    <label>
        <span>Nom</span>
        <input type="text" name='nom' required value='<?= $user['nom']; ?>' />
    </label>

    <label>
        <span>Prenom</span>
        <input type="text" name='prenom' required value='<?= $user['prenom']; ?>' />
    </label>

    <label>
        <span>Password</span>
        <input type="text" name='password' required value='<?= $user['password']; ?>' />
    </label>

    <button type='submit'>Save</button>
  </form>
</section>

<?php
require_once __DIR__ .'/../../inc/footer.php';


