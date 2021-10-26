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
        $password = $_REQUEST["password"];

       $result = DB::dataQuery("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
       if (count($result) > 0){

       
        //Asignarle el id de usuario a la sesión
        $id = $result[0]['id'];
        Security::createSession($id);


            return $result[0];
        } else{
            return null;
        }
            
    }


    public function register(){

        if(isset($_REQUEST['username']) && isset($_REQUEST['password']) && isset($_REQUEST['realname']) && isset($_REQUEST['lastname1']) && isset($_REQUEST['email'])){

            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            $realname = $_REQUEST['realname'];
            $lastname1 = $_REQUEST['lastname1'];
            $email = $_REQUEST['email'];

            if(isset($_REQUEST['lastname2'])){

                $lastname2 = $_REQUEST['lastname2'];

                $result = DB::dataManipulation("INSERT INTO users(username,password,realname,lastname1,email,lastname2) VALUES ('$username', '$password', '$realname', '$lastname1', '$email', '$lastname2')");

            }else{
                $result = DB::dataManipulation("INSERT INTO users(username,password,realname,lastname1,email) VALUES ('$username', '$password', '$realname', '$lastname1', '$email')");
            }





        }else{
            $result = null;
        }

        return $result;


    }






}

?>