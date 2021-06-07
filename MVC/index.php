<?php

use \MVC\Controller;
use \MVC\Model;
use \MVC\View;


require_once "Controller.php";
require_once "Model.php";
require_once "View.php";

$model =  new Model();
$controller = new Controller($model);
$view = new View($controller);

$view->input("Hello");

$view->output();
