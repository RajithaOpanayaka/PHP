<?php

namespace app\controllers;

class MainController
{
    public function index($router)
    {   
        $message = $router->db->getMessage();
        $router->renderView('index', $message);
    }
    public function create($router)
    {   
        if($_SERVER['REQUEST_METHOD'] === 'POST') {          
            $message = $_POST['message'];
            $router->db->setMessage($message);
            header('Location: /');
            exit;
        }
    }
}