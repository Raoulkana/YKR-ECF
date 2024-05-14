<?php
require_once __DIR__ . '/../../inc/bootstrap.php';

$service = [
    'nom' => '',
    'description' => '',
];

if (!empty($_REQUEST['service_id'])) {
    $service = \DB::getService($_REQUEST['service_id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nom' => filter_input(INPUT_POST, 'nom'),
        'description' => filter_input(INPUT_POST, 'description'),
    ];

    if (empty($service['service_id'])) {
        if (\DB::createService($data)) {
            header("Location: /admin/services");
            die;
        }
    } else {
        if (\DB::updateService($service['service_id'], $data)) {
            header("Location: /admin/services");
            die;
        }
    }
}

if (isset($_REQUEST['action'])
    && $_REQUEST['action'] == 'delete'
    && !empty($service)) {
    \DB::deleteService($service['service_id']);

    header("Location: /admin/services");
    die;
}

require_once __DIR__ .'/../../inc/header.php';
?>

<link rel="stylesheet" href="/admin/services/services.css">

<section>
 <form action="" method='post'>
    <label>
        <span>Nom</span>
        <input type="text" name='nom' required value='<?= $service['nom']; ?>' />
    </label>

    <label>
        <span>Description</span>
        <input type="text" name='description' required value='<?= $service['description']; ?>' />
    </label>

    <button type='submit'>Save</button>
 </form>
</section>

<?php
require_once __DIR__ .'/../../inc/footer.php';


