<?php

namespace app\controllers;


use app\models\Model;

abstract class Controllers
{
    public $route;
    public $layout;
    public $vars;

    public function __construct($route)
    {
        $this->route = $route;
        new Model();
    }

    public function getView()
    {
        $vObj = new View($this->route, $this->layout);
        $vObj->render($this->vars);
    }

    public function set($vars){
        $this->vars = $vars;
    }
}