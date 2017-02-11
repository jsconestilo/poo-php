<?php

namespace PTF\Models;

use PTF\Database;

class Usuario
{
    public static function login($usuario, $clave)
    {
        $db = Database::getInstance();

        if ($res = $db->query("SELECT id FROM usuarios WHERE usuario = '{$usuario}' AND clave = MD5('{$clave}') LIMIT 1")->fetch()) {
            return $res['id'];
        }

        return false;
    }

    public static function isLogin()
    {
        return isset($_SESSION['id']);
    }
}