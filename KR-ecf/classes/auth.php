<?php
class Auth {
    public static function isLoggedIn() {
        return !empty($_SESSION['user']['username']);
    }

    public static function login($username, $password) {
        $user = \DB::getUser($username);

        if(empty($user['password'])) {
            return false;
        }

        if ($user['password'] !== $password) {
            return false;
        }

        $_SESSION['user'] = $user;

        return $user;
    }
}
