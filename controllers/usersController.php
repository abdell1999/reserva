<?php

include_once ("view.php");
include_once ("models/users.php");
include_once ("errorController.php");


class UsersController {

    private $view, $users;

    public function __construct() {
    
        $this->view = new View();
        $this->users = new User();
        




    }



    public function showLogin(){
        $this->view->show("users/login");
    }




    public function login($data = null){
        $result = $this->users->login();

        if($result){

            header("Location: index.php");
        }else{
            $data['error'] = "Los datos que ha introducido no coinciden con ningún usuario";
            $this->view->show("users/login", $data);
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

        //Realizar la validación del formulario en el lado del servidor y devolver la lista de errores.
        
            $result =  $this->users->register();
             if($result){
                header("Location: index.php?controller=users&action=showLogin");
             }else{
                 echo "ERROR";
             }
             
         
    }


    //Obtener datos del usuario logueado actualmente
    public function userLogged(){
        $result =  $this->users->userLogged();
        return $result;
    }


    public function show($data = null){

        $data['users'] = $this->users->get();

        $this->view->show("users/show", $data);
        
    }



    public function edit(){
        if(Security::getType()==1){
        $data['user'] = $this->users->getElement();
        $this->view->show("users/edit", $data);
        }else{
            $this->error->show404();
        }
    }


    public function update(){
        $result = $this->users->update();

        if($result == 1){
            $data['correcto'] = "Usuario modificado correctamente";
            
        }else{
            $data['error'] = "Ha ocurrido un error al modificar los datos del usuario";
        }

        
        $this->show($data);
    }


}