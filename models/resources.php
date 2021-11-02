<?php

include_once("db.php");
include_once("security.php");
include_once("reservations.php");
include_once ("config.php");


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

  
    /**
     * Devuelve todos los elementos de la tabla resources
     */
    
    public function get()
    {
       $result = DB::dataQuery("SELECT * FROM resources");
       return $result;
    }






    /**
     * Este método devuelve un recurso, se puede obtener de dos manera ya que necesitamos un id
     * podemos pasarselo como parámetro o a traves de un formulario.
     */

    public function getElement($id = null){
        if($id == null){
            $id = $_REQUEST['id'];
        }
       $result = DB::dataQuery("SELECT * FROM resources WHERE id=$id");
       return $result;
    }



    /**
     * Método que sirve para eliminar un recurso, ya que el id de resource es una clave ajena en
     * reservations, en primer lugar hay que eliminar las reservas en los que aparezca el id de este
     * recurso y posteriormente eliminar el recurso en sí.
     */
    public function delete(){
        $id = $_REQUEST['id'];
        $reservations = new Reservation();
        $reservations->deleteByResource($id);
        $result = DB::dataManipulation("DELETE FROM resources WHERE id = '$id'"); 
        
        return $result;
    }




    /**
     * Este método guarda en la base de datos un nuevo recurso, lo más complejo es el tema de almcacenar la imagen. 
     */

    public function store(){
        if(isset($_REQUEST["name"]) && isset($_REQUEST["description"]) && isset($_REQUEST["location"]) && isset($_FILES["image"])){
            $name = $_REQUEST["name"];
            $description = $_REQUEST["description"];
            $location = $_REQUEST["location"];


            $target_path = Config::$rutaGuardado;
            $basename = basename( rand(1,99999) . $_FILES['image']['name']);
            $target_path = $target_path . $basename; 
                if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
                    //echo "OKEY CRACK";

                    $image = Config::$rutaMostrar.$basename;

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





    public function update(){

        
        if( isset($_REQUEST["id"]) && isset($_REQUEST["name"]) && isset($_REQUEST["description"]) && isset($_REQUEST["location"])){
            $id = $_REQUEST["id"];
            $name = $_REQUEST["name"];
            $description = $_REQUEST["description"];
            $location = $_REQUEST["location"];
            $image = null;

            if($_FILES["image"]){
                $target_path = Config::$rutaGuardado;
                $basename = basename( rand(1,99999) . $_FILES['image']['name']);
                $target_path = $target_path . $basename; 
                if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
                    //echo "OKEY CRACK";

                    $image = $image = Config::$rutaMostrar.$basename;

                    //echo $image;
                    //echo "<a href='$image'> IMAGEN </a>";
                } else{
            
                    //echo "Ha ocurrido un error, trate de nuevo!"; //No existe la imagen
                //echo "ADIOS";
                }
            }






            if($image){
                $result = DB::dataManipulation("UPDATE resources SET name='$name', description='$description', location='$location', image='$image' WHERE id='$id'");
            }else{
                $result = DB::dataManipulation("UPDATE resources SET name='$name', description='$description', location='$location' WHERE id='$id'");
            }
    }else{
        $result = null;
    }








        
        return $result;
    }

    }
?>