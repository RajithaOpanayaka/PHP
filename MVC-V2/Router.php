<?php

namespace app;

use app\Models\Model;

class Router
{   
    private array $getRoutes = [];
    public $db;

    public function __construct()
    {
        $this->db = new Model();
    }

    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }
    public function resolve()
    {   
        $currentUrl = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            $fn = $this->getRoutes[$currentUrl] ?? null;
        }
        if ($fn) {
            call_user_func($fn,$this);
        } else {
            echo "Page not found.";
        }
    }
    public function renderView($view, $params='')
    {   
        ob_start();
        include_once __DIR__."/Views/$view.php";
        $content = ob_get_clean();
        include_once __DIR__.'/Views/_layout.php';
    }

}