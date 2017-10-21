<?php

namespace app\controllers;


class View
{
    public $route;
    public $layout;

    public function __construct($route, $layout = '')
    {
        $this->route = $route;
        if ($layout === false) {
            $this->layout = false;
        } else {
            $this->layout = $layout;
        }

    }

    public function render($vars)
    {
        if (is_array($vars)) extract($vars);
        $fileView = APP . "/views/{$this->route['controller']}/{$this->route['action']}.php";
        ob_start();
        if (is_file($fileView)) {
            require $fileView;
        } else {
            echo " Не найден вид {$this->route['action']}";
            require '/404.html';
        }
        $content = ob_get_clean();
        if ($this->layout !== false) {
            $fileLayout = APP . "/views/layouts/default.php";
            if (is_file($fileLayout)) {
                require $fileLayout;
            } else {
                echo " Не найден шаблон {$fileLayout}";
                require '/404.html';
            }
        }


    }


}