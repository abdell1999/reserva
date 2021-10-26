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




    public function login(){
        $result = $this->users->login();

        if($result){

            echo $result['id'];
        }

    }


    public function logOut(){
        Security::closeSession();
        header("Location: index.php?controller=users&action=showLogin");
    }





    public function showRegister(){
        $this->view->show("users/register");
    }


    public function register(){
        
            $result =  $this->users->register();
             if($result){
                header("Location: index.php?controller=users&action=showLogin");
             }else{
                 echo "ERROR";
             }
             
         
    }


}