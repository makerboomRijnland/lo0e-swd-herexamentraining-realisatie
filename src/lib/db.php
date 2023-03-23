<?php

define("DB_HOST", $_ENV['MYSQL_HOSTNAME']);
define("DB_USER", $_ENV['MYSQL_USER']);
define("DB_PASS", $_ENV['MYSQL_PASSWORD']);
define("DB_NAME", $_ENV['MYSQL_DATABASE']);

mysqli_report(MYSQLI_REPORT_ERROR);

class Database {

    private static $db;
    private $connection;

    private function __construct() {
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    function __destruct() {
        $this->connection->close();
    }

    public static function getConnection() {
        if (self::$db == null) {
            self::$db = new Database();
        }
        return self::$db->connection;
    }
}