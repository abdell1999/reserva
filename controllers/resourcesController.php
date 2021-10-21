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
        $result = $this->resources->update($id);

        if($result){
            echo "OK";
        }else{
            echo "ERROR";
        }




    }



}