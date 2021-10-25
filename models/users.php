<?php

include_once("db.php");

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

    /**
     * Comprueba si un email y una password pertenecen a algún usuario de la base  de datos.
     * @param String $email El email del usuario que se quiere comprobar
     * @param String $pass La contraseña del usuario que se quiere comprobar
     * @return User $usuario Si el usuario existe, devuelve un array con todos los campos del usuario en su interior. Si no, devuelve un objeto null
     */
    public function checkLogin($email, $pass)
    {
       $result = DB::dataQuery("SELECT * FROM users WHERE email = '$email' AND password = '$pass'");
       if (count($result) > 0)
            return $result[0];
        else
            return null;
    }



}
?>