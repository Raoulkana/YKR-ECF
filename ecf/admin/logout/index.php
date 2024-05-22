<?php

require_once __DIR__ . '/../inc/bootstrap.php';

session_regenerate_id();
unset($_SESSION['user']);

header("Location: /login");
