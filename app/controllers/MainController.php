<?php

namespace app\controllers;

use app\models\Main;

class MainController extends Controllers
{
    public function indexAction()
    {


        $this->layout = false;
        $title = __METHOD__;
        $content = Main::getAll();
        debug($content);

        $this->set(compact('title', 'content'));


    }

}