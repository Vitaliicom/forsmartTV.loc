<?php

namespace app\controllers;

use app\models\Main;

class MainController extends Controllers
{
    public function indexAction()
    {


        $this->layout = false;
        $name =  __METHOD__;
      $data =   Main::getAll();
//      debug($data);


//        $title = 'Main++2';
//        $this->layout = false;
//
//
//        $this->set(compact('title','name'));
//

//        $this->getView();
//        debug($segments);
//        debug($this->route);
//        $data = Main::indexAction();
//        require ROOT . "/views/main/index.php";
    }

}