<?php

namespace PTF\Controllers;

use PTF\View;
use PTF\Models\Producto;

class ProductoController extends AuthController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $productos = Producto::all();

        $index = new View('producto/index');

        $layout = new View('dashboard');
        echo $layout->render(['content' => $index->render(compact('productos'))]);
    }

    public function crear()
    {
        $errors = [];

        if (!empty($_POST['nombre'])) {
            $producto = new Producto;

            $producto->setNombre($_POST['nombre']);
            $producto->setDescripcion($_POST['descripcion']);

            $producto->save();

            header('Location: /producto/index');
        } else {
            if (!empty($_POST) && empty($_POST['nombre'])) {
                $errors['nombre'] = 'Nombre requerido';
            }
        }

        $index = new View('producto/crear');

        $layout = new View('dashboard');
        echo $layout->render(['content' => $index->render(compact('errors'))]);
    }

    public function editar($id)
    {
        $producto = Producto::getById($id);

        if (!$producto) {
            header('Location: /producto/index');
        }

        $errors = [];

        if (!empty($_POST['nombre'])) {
            $producto = new Producto;

            $producto->setNombre($_POST['nombre']);
            $producto->setDescripcion($_POST['descripcion']);

            $producto->save($id);

            header('Location: /producto/index');
        } else {
            if (!empty($_POST) && empty($_POST['nombre'])) {
                $errors['nombre'] = 'Nombre requerido';
            }
        }

        $index = new View('producto/editar');

        $layout = new View('dashboard');
        echo $layout->render(['content' => $index->render(compact('producto'))]);
    }

    public function borrar($id)
    {
        $producto = Producto::getById($id);

        if ($producto) {
            $producto->destoy();
        }

        header('Location: /producto/index');
    }
}