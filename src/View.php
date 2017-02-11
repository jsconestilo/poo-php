<?php

namespace PTF;

class View
{
    private $view;

    public function __construct($view)
    {
        $this->view = $view;
    }

    public function render($data = [])
    {
        extract($data);

        ob_start();
        require_once __DIR__ . "/../view/{$this->view}.php";
        return ob_get_clean();
    }
}