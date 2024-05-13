<?php
require_once __DIR__ . '/../../inc/bootstrap.php';

if (!Auth::isLoggedIn()) {
    header("Location: /login");
    die;
}
