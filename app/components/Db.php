<?php

namespace app\components;


class Db
{
    public static function getConnection(){
        require "rb.php";

        $dsn = 'mysql:dbname=fw;host=localhost';
        $user = 'root';
        $password = '';
        $opt = array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC

        );

        \R::setup($dsn, $user, $password,  $opt);
//        \R::freeze( TRUE );

//        var_dump(\R::testConnection());

//        try {
//            return new \PDO($dsn, $user, $password,  $opt);
//        } catch (\PDOException $e) {
//            echo 'Подключение не удалось: ' . $e->getMessage();
//        }

    }

}