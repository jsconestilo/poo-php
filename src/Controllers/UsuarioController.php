<?php

namespace PTF\Controllers;

use PTF\Models\Usuario;
use PTF\View;

class UsuarioController
{
    public function login()
    {
        $errors = [];

        if (!empty($_POST['usuario']) && !empty($_POST['clave'])) {
            if($id = Usuario::login($_POST['usuario'], $_POST['clave'])) {
                $_SESSION["id"] = $id;

                header('Location: /admin/index');
            } else {
                $errors = ['login' => 'Usuario y/o clave incorrectos'];
            }
        } else {
            if (!empty($_POST) && empty($_POST['usuario'])) {
                $errors['usuario'] = 'Usuario requerido';
            }

            if (!empty($_POST) && empty($_POST['clave'])) {
                $errors['clave'] = 'Clave requerida';
            }
        }

        $view = new View('usuario/login');
        echo $view->render(compact('errors'));
    }

    public function logout()
    {
        session_destroy();

        header('Location: /admin');
    }
}