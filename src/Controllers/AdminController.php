<?php

namespace PTF\Controllers;

use PTF\View;

class AdminController extends AuthController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        header('Location: /producto');
    }
}