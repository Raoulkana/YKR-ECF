<?php
session_start([
    'http_only' => true,
]);

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../classes/db.php';
require_once __DIR__ . '/../classes/auth.php';

