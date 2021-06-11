<?php

namespace app\controllers;

class MainController
{
    public function index($router)
    {   
        $message = $router->db->getMessage();
        $router->renderView('index', $message);
    }
}