<?php
require_once __DIR__ . '/../../inc/bootstrap.php';

$animal = [
    'prenom' => '',
    'etat' => '',
];

if (!empty($_REQUEST['animal_id'])) {
    $animal = \DB::getAnimal($_REQUEST['animal_id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'prenom' => filter_input(INPUT_POST, 'prenom'),
        'etat' => filter_input(INPUT_POST, 'etat'),
    ];

    if (empty($animal['animal_id'])) {
        if (\DB::createAnimal($data)) {
            header("Location: /admin/animaux");
            die;
        }
    } else {
        if (\DB::updateAnimal($animal['animal_id'], $data)) {
            header("Location: /admin/animaux");
            die;
        }
    }
}

if (isset($_REQUEST['action'])
    && $_REQUEST['action'] == 'delete'
    && !empty($animal)) {
    \DB::deleteAnimal($animal['animal_id']);

    header("Location: /admin/animaux");
    die;
}

require_once __DIR__ .'/../../inc/header.php';
?>

<link rel="stylesheet" href="/admin/animaux/animaux.css">

<section>
 <form action="" method='post'>
    <label>
        <span>prenom</span>
        <input type="text" name='prenom' required value='<?= $animaux['prenom']; ?>' />
    </label>

    <label>
        <span>etat</span>
        <input type="text" name='etat' required value='<?= $animaux['etat']; ?>' />
    </label>

    <button type='submit'>Save</button>
 </form>
</section>

<?php
require_once __DIR__ .'/../../inc/footer.php';


