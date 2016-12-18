<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 03.11.2016
 * Time: 15:08
 */

namespace inc\controller;


class MainController
{
    static public function loadMainPage(){
        global $twig;
        echo ($twig->render('index.twig'));
    }

    static public function loadDeliveryPage(){

    }

    static public function loadOptPage(){

    }

    static public function getItem(){

    }

    static public function loadKabinetPage(){

    }

}