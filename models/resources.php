<?php

include_once("db.php");
include_once("security.php");

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






    public function store(){


        if(isset($_REQUEST["name"]) && isset($_REQUEST["description"]) && isset($_REQUEST["location"]) && isset($_FILES["image"])){
            $name = $_REQUEST["name"];
            $description = $_REQUEST["description"];
            $location = $_REQUEST["location"];




            //$image = $_REQUEST["image"];

            $target_path = "C:/xampp/htdocs/dwes/reserva/img/resources/";
            $basename = basename( rand(1,99999) . $_FILES['image']['name']);
            $target_path = $target_path . $basename; 
                if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
                    //echo "OKEY CRACK";

                    $image = "http://localhost/dwes/reserva/img/resources/$basename";

                    //echo $image;
                    //echo "<a href='$image'> IMAGEN </a>";
                } else{
            
                    echo "Ha ocurrido un error, trate de nuevo!";
                //echo "ADIOS";
                }






                $result = DB::dataManipulation("INSERT INTO resources(name,description,location,image) VALUES ('$name', '$description', '$location', '$image')");
            






        }else{
            $result = null;
        }









            
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