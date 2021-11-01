<?php

include_once ("view.php");

class ErrorController {

    private $view;

    public function __construct() {
    
        $this->view = new View();
    }


    public function show404(){
       
        $this->view->show2("errors/404");
    }


}