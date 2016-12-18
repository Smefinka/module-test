<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 15.10.2016
 * Time: 20:28
 */



function dbConection()
{
    $dsn = "mysql:dbname=" . DBNAME . ";host=" . HOST;
    $dbh = new \PDO($dsn, USER, PASSWORD, [
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
    ]);
    return $dbh;
}

function getRoutes(){
    $routes = [
        '' => '\inc\controller\MainController::loadMainPage',
        'dostavka-i-oplata' => '\inc\controller\MainController::loadDeliveryPage',
        'optovikam' => '\inc\controller\MainController::loadOptPage',
        'kabinet' => '\inc\controller\MainController::loadKabinetPage',
        'item/' => '\'\inc\controller\MainController::getItem',
        'register' => '\inc\controller\Registration::checkRegistrationInfo',
        'login' => '\inc\controller\UserLogin::LogIn',
        'logout' => '\inc\controller\UserOut::LogOut'
    ];
    return $routes;
}
?>