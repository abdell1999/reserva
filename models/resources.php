<?php

include_once("db.php");

class Resources
{

    /**
     * Constructor de la clase.
     * Crea una conexión con la base de datos y la asigna a la variable $this->db
     */
    public function __construct()
    {
        DB::createConnection();
    }

  
    
    public function get()
    {
       $result = DB::dataQuery("SELECT * FROM resources");
       return $result;
    }


    public function getElement($id)
    {
       $result = DB::dataQuery("SELECT * FROM resources WHERE id=$id");
       return $result;
    }



    
    public function delete($id){
        $result = DB::dataManipulation("DELETE FROM resources WHERE id = '$id'"); 
        return $result;
    }






    public function create($idResources,$name,$description,$location,$reservations){
            $result = DB::dataManipulation("INSERT INTO resources(id,name,description,location,reservations) VALUES ('$idResources','$name', '$description', '$location', '$reservations')");

           
    }
    public function update($idResources,$name,$description,$location,$reservations){
        $result = DB::dataManipulation("UPDATE resources SET name='$name', description='$description', location='$location', reservations='$reservations' WHERE id='$idResources'");
    }

    }
?>