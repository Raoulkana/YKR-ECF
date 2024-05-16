<?php
$title = 'Formulaire de connexion';

require_once __DIR__ . '/../inc/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    \Auth::login($username, $password);

    if (Auth::isLoggedIn()) {
        header("Location: /admin");
        die;
    }
}

require_once __DIR__ . '/../inc/header.php';
?>

<style>
    .container {
        padding-bottom: 20px;
        margin-bottom: 30px;
    }
</style>
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-4 bg-secondary m-auto rounded-top">
            <h2 class="text-center">Connexion</h2>
            <p class="text-center text-light lead">Personnes Autoriser: ADMINISTRATEUR-EMPLOYÉS-VÉTÉRINAIRES</p>

            <form action="" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control" placeholder="E-mail" name="username">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    <input type="text" class="form-control" placeholder="Mot de passe" name="password">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Se Connecter</button>

                </div>
            </form>

        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../inc/footer.php';
