<?php

namespace PTF\Controllers;

use PTF\Models\Usuario;

abstract class AuthController
{

    public function __construct()
    {
        if (!Usuario::isLogin()) {
            header('Location: /usuario/login');
        }
    }
}