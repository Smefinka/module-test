<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 11.10.2016
 * Time: 19:51
 */

namespace inc\controller;


class Router
{
    public $url;
    public $route;
    public $routes = [];

    function getRun()
    {
        $routes = getRoutes();
        $url = $_SERVER["REQUEST_URI"];
        $url = trim($url, '/');
        $route = explode("/", $url);
        if (isset($route[1])) {
            foreach ($routes as $urlPath => $action) {
                $urlPath = $urlPath . $route[1];
                if ($url == $urlPath) {
                    return call_user_func($action, $route[1]);
                }
            }
        } else {
            foreach ($routes as $urlPath => $action) {
                if ($url == $urlPath) {
                    return call_user_func($action);
                }
            }
        }
    }
}
?>