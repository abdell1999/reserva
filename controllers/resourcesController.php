<?php

include_once ("view.php");
include_once ("models/resources.php");


class ResourcesController {

    private $view, $resources;

    public function __construct() {
    
        $this->view = new View();
        $this->resources = new Resources();
    }



    public function show(){

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
        $data['list'] = $this->resources->get();
        $this->view->show("resources/show", $data);
    }



    public function create(){
        $this->view->show("resources/create");
    }


    public function store(){
        echo "ESTO FUNCIONA TIO";
    }


    public function edit($id){
        $data['element'] = $this->resources->getElement($id);
        $this->view->show("resources/edit", $data);
    }



}