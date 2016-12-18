<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 23.10.2016
 * Time: 1:35
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
require_once 'vendor/twig/twig/lib/Twig/Autoloader.php';

$loader = new Twig_Loader_Filesystem('templates/twig');
$twig = new Twig_Environment($loader);

$router = new \inc\controller\Router();
$router->getRun();