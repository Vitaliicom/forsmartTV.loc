<?php

namespace app\models;


use app\components\Db;

class Model
{
    public function __construct()
    {
        Db::getConnection();
    }
}