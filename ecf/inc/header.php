<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css  ">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <title><?= $title; ?></title>
</head>
    <nav class="cc-navbar navbar navbar-expand-lg navbar-dark w-100">
        <div class="container-fluid">
        <a class="navbar-brand text-uppercase mx-4 py-3" href="/">ARCADIA Zoo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item pe-4">
                <a class="nav-link active" aria-current="page" href="/">Acceuil</a>
            </li>
            <li class="nav-item pe-4">
                <a class="nav-link" href="/services">Les Services</a>
            </li>
            <li class="nav-item pe-4">
                <a class="nav-link" href="/animaux">Les animaux</a>
            </li>

            <li class="nav-item pe-4">
                <a class="nav-link" href="/habitats">Les Habitats</a>
            </li>
            <li class="nav-item pe-4">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item pe-4">
                <a href="/login" class="btn btn-order rounded-0">Connexion</a>
            </li>

            </ul>

        </div>
        </div>
    </nav>
