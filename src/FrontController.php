<?php

namespace PTF;

class FrontController
{
    private $controller;
    private $action = 'index';
    private $params;

    public function __construct()
    {
        $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        @list($controller, $action, $params) = explode('/', $path, 3);

        if (isset($controller)) {
            $controller = 'PTF\\Controllers\\' . ucfirst(strtolower($controller)) . 'Controller';
            if (!class_exists($controller)) {
                $controller = 'PTF\\Controllers\\PaginaController';
            }

            $this->controller = $controller;
        }

        if (isset($action)) {
            $reflector = new \ReflectionClass($controller);
            if (!$reflector->hasMethod($action)) {
                throw new InvalidArgumentException("The action '$action' has been not defined.");
            }

            $this->action = $action;
        }

        $this->params = explode("/", $params);
    }

    public function run()
    {
        call_user_func_array([new $this->controller, $this->action], $this->params);
    }
}