<?php

include_once("db.php");
include_once("security.php");

class User
{

    /**
     * Constructor de la clase.
     * Crea una conexión con la base de datos y la asigna a la variable $this->db
     */
    public function __construct()
    {
       DB::createConnection(); 
    }


    public function login()
    {

        $email = $_REQUEST["email"];
        $password = md5($_REQUEST["password"]);

       $result = DB::dataQuery("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
       if ($result){

       
        //Asignarle el id de usuario a la sesión
        $id = $result[0]['id'];
        $type = $result[0]['type'];

        
        Security::createSession($id);
        Security::changeType($type);

            return $result[0];
        } else{
            return null;
        }
            
    }


    public function register(){

        if(isset($_REQUEST['username']) && isset($_REQUEST['password']) && isset($_REQUEST['realname']) && isset($_REQUEST['lastname1']) && isset($_REQUEST['email'])){

            $username = $_REQUEST['username'];
            $password = md5($_REQUEST["password"]);
            $realname = $_REQUEST['realname'];
            $lastname1 = $_REQUEST['lastname1'];
            $email = $_REQUEST['email'];

            if(isset($_REQUEST['lastname2'])){

                $lastname2 = $_REQUEST['lastname2'];

                $result = DB::dataManipulation("INSERT INTO users(username,password,realname,lastname1,email,lastname2,type) VALUES ('$username', '$password', '$realname', '$lastname1', '$email', '$lastname2',0)");

            }else{
                $result = DB::dataManipulation("INSERT INTO users(username,password,realname,lastname1,email,type) VALUES ('$username', '$password', '$realname', '$lastname1', '$email',0)");
            }





        }else{
            $result = null;
        }

        return $result;


    }



    public function userLogged(){
        $id = Security::getUserId();

        $result = DB::dataQuery("SELECT * FROM users WHERE id = '$id'");
                
        return $result;
        

    }






}

?>