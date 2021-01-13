<?php


class Controller
{
    public function view($view, $data = array()){
        if(file_exists('../app/views/'.$view.'.php')){
            require_once '../app/views/'.$view.'.php';
        } else {
            die('View does not exist');
        }
    }
}