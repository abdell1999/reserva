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






    public function store($name,$description,$location,$image){
            $result = DB::dataManipulation("INSERT INTO resources(name,description,location,image) VALUES ('$name', '$description', '$location', '$image')");
            return $result;
           
    }
    public function update($id,$name,$description,$location,$image){
        if($image){
            $result = DB::dataManipulation("UPDATE resources SET name='$name', description='$description', location='$location', image='$image' WHERE id='$id'");
        }else{
            $result = DB::dataManipulation("UPDATE resources SET name='$name', description='$description', location='$location' WHERE id='$id'");
        }
        return $result;
    }

    }
?>