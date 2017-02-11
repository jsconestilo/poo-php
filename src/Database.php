<?php

namespace PTF;

class Database
{
    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            try {
                self::$instance = new \PDO('mysql:dbname=ptf;host=localhost', 'root', 'root');
            } catch (\PDOException $e) {
                echo 'Falló la conexión: ' . $e->getMessage();
            }
        }

        return self::$instance;
    }
}