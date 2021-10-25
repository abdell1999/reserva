<?php

include_once ("view.php");
include_once ("models/users.php");


class UsersController {

    private $view, $users;

    public function __construct() {
    
        $this->view = new View();
        $this->users = new User();
    }



    public function showLogin(){
        $this->view->show("users/login");
    }


}