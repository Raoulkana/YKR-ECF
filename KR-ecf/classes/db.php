<?php

class DB {
    private static PDO $conn;
    private const DB_HOST = 'sql11.freesqldatabase.com';
    private const DB_NAME = 'sql11705952';
    private const DB_USERNAME = 'sql11705952';
    private const DB_PASSWORD = 'J5QMdci5Kw';
    private const DB_PORT = '3306';

    /**
     * @return PDO
     */
    public static function connect() {
        if (empty(self::$conn)) {
            $server = self::DB_HOST;
            $username = self::DB_USERNAME;
            $password = self::DB_PASSWORD;
            $db = self::DB_NAME;

            try {
                // Create connection
                self::$conn = new PDO("mysql:host=$server;dbname=$db", $username, $password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo "Connection failed. Reason: " . $e->getMessage();
            }
        }

        return self::$conn;
    }

    public static function getUsers() {
        $db = self::connect();

        $sth = $db->prepare("SELECT * FROM `utilisateur`");
        $sth->execute();

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getUser($username) {
        $db = self::connect();

        $sth = $db->prepare("SELECT * FROM `utilisateur` WHERE `username` = :username");
        $sth->execute([
            'username' => $username,
        ]);

        return $sth->fetch(PDO::FETCH_ASSOC);
    }

    public static function createUser($data) {
        $db = self::connect();

        $sth = $db->prepare("INSERT INTO `utilisateur` (`username`, `nom`, `prenom`, `password`) VALUES (:username, :nom, :prenom, :password)");

        return $sth->execute($data);
    }

    public static function updateUser($username, $data) {
        $db = self::connect();

        $sth = $db->prepare("UPDATE `utilisateur` SET `nom` = :nom, `prenom` = :prenom, `password` = :password WHERE `username` = :username");
        $data['username'] = $username;

        return $sth->execute($data);
    }

    public static function getServices() {
        $db = self::connect();

        $sth = $db->prepare("SELECT * FROM `service`");
        $sth->execute();

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getService($service_id) {
        $db = self::connect();

        $sth = $db->prepare("SELECT * FROM `service` WHERE `service_id` = :service_id");
        $sth->execute([
            'service_id' => $service_id,
        ]);

        return $sth->fetch(PDO::FETCH_ASSOC);
    }

    public static function createService($data) {
        $db = self::connect();

        $sth = $db->prepare("INSERT INTO `service` (`nom`,`description`) VALUES (:nom, :description)");

        return $sth->execute($data);
    }

    public static function updateService($service_id, $data) {
        $db = self::connect();

        $sth = $db->prepare("UPDATE `service` SET `nom` = :nom, `description` = :description WHERE `service_id` = :service_id");
        $data['service_id'] = $service_id;

        return $sth->execute($data);
    }
}