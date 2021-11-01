<?php

include_once ("view.php");
include_once ("models/resources.php");
include_once ("models/security.php");
include_once ("errorController.php");


class ResourcesController {

    private $view, $resources, $error;

    public function __construct() {
    
        $this->view = new View();
        $this->resources = new Resources();
        $this->error = new ErrorController();
    }



    public function show($data = null){

        $data['list'] = $this->resources->get();

        $data['type'] = Security::getType();

        $this->view->show("resources/show", $data);

    }
    
    

    public function delete(){

        if(Security::getType()==1){
            $result = $this->resources->delete();

            if($result>0){
                $data["message1"] = "Eliminado correctamente";
            }else{
                $data["message"] = "Ha ocurrido un error al eliminar";
            }
    
            $this->show($data);
    
        }else{
            
            $this->error->show404();
        }



        }




    //Los request hacerlos en el modelo y pasarlos por la clase security que es otro modelo.
    //Todo lo que implique crear cosas en el serveer hacerlo en el modelo
    public function create(){
        if(Security::getType()==1){
        $this->view->show("resources/create");
        }else{
            $this->error->show404();

        }
    }


    public function store(){
        if(Security::getType()==1){
       $result =  $this->resources->store();
       if($result>0){
        $data["message1"] = "Recurso creado correctamente";
    }else{
        $data["message"] = "Ha ocurrido un error al crear el recurso";
    }
    $this->show($data);

    }else{
        $this->error->show404();
    }
    }


    public function edit(){
        if(Security::getType()==1){
        $data['element'] = $this->resources->getElement();
        $this->view->show("resources/edit", $data);
        }else{
            $this->error->show404();
        }
    }


    public function update(){
        if(Security::getType()==1){
        $result = $this->resources->update();

        if($result>0){
            $data["message1"] = "Recurso editado correctamente";
        }else{
            $data["message"] = "Ha ocurrido un error al modificar el recurso";
        }
        $this->show($data);

    }else{
        $this->error->show404();
    }


    }



}