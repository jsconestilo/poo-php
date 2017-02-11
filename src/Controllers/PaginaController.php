<?php

namespace PTF\Controllers;

use PTF\Models\Producto;
use PTF\View;

class PaginaController
{
    public function index()
    {
        echo (new View('inicio'))->render();
    }

    public function productos()
    {
        $productos = Producto::all();

        echo (new View('productos'))->render(compact('productos'));
    }

    public function producto($id)
    {
        $producto = Producto::getById($id);

        echo (new View('producto'))->render(compact('producto'));
    }

    public function contacto()
    {
        echo (new View('contacto'))->render();
    }
}