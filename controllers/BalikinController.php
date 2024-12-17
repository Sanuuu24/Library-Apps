<?php

require 'Controller.php';
class BalikinController extends Controller{
    public static function index(){
        return self::view('views/balikin.php');
    }
}

BalikinController::index();