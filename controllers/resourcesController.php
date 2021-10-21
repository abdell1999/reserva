<?php

include_once ("view.php");
include_once ("models/resources.php");


class ResourcesController {

    private $view, $resources;

    public function __construct() {
    
        $this->view = new View();
        $this->resources = new Resources();
    }



    public function show($data = null){

        $data['list'] = $this->resources->get();
        $this->view->show("resources/show", $data);

    }
    
    

    public function delete($id){
        $result = $this->resources->delete($id);

        if($result>0){
            $data["message"] = "Eliminado correctamente";
        }else{
            $data["message"] = "Ha ocurrido un error al eliminar";
        }


        //Preguntarle al profesor, ya que esto es un poco espagueti
        //$data['list'] = $this->resources->get();
        //$this->view->show("resources/show", $data);

        //return redirect()->action([ArticuloController::class, 'index']);

        $this->show($data);


        //Coger el server desde el config
        //header ("Location: index.php");
    }


    //Los request hacerlos en el modelo y pasarlos por la clase security que es otro modelo.
    //Todo lo que implique crear cosas en el serveer hacerlo en el modelo
    public function create(){
        $this->view->show("resources/create");
    }


    public function store(){
       $result =  $this->resources->store();
        if($result){
            echo "OK";
        }else{
            echo "ERROR";
        }
        
    }


    public function edit($id){
        $data['element'] = $this->resources->getElement($id);
        $this->view->show("resources/edit", $data);
    }


    public function update($id){

        if( isset($_REQUEST["id"]) && isset($_REQUEST["name"]) && isset($_REQUEST["description"]) && isset($_REQUEST["location"])){
            $id = $_REQUEST["id"];
            $name = $_REQUEST["name"];
            $description = $_REQUEST["description"];
            $location = $_REQUEST["location"];
            $image = null;

            if($_FILES["image"]){
                $target_path = "C:/xampp/htdocs/dwes/reserva/img/resources/";
                $basename = basename( rand(1,99999) . $_FILES['image']['name']);
                $target_path = $target_path . $basename; 
                if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
                    //echo "OKEY CRACK";

                    $image = "http://localhost/dwes/reserva/img/resources/$basename";

                    //echo $image;
                    //echo "<a href='$image'> IMAGEN </a>";
                } else{
            
                    //echo "Ha ocurrido un error, trate de nuevo!"; //No existe la imagen
                //echo "ADIOS";
                }
            }






            $this->resources->update($id,$name,$description,$location,$image);
            $this->show();
    }




    }



}