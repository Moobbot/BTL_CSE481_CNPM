<?php
class Controller {
    public function model($model){
        require_once "./wibu/models/".$model.".php";
        return new $model;
    }

    public function view($view,$data = []){
        require_once "./wibu/views/".$view.".php"; 
    }
}
?>