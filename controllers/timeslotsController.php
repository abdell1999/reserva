<?php

include_once ("view.php");
include_once ("models/timeslots.php");
include_once ("errorController.php");


class TimeslotsController {

    private $view, $timeslots;

    public function __construct() {
    
        $this->view = new View();
        $this->timeslots = new Timeslots();
        $this->error = new ErrorController();
    }


    public function show($data = null){

        $data['timeslots'] = $this->timeslots->get();
        $this->view->show("timeslots/show", $data);
    }



    public function create(){
        
        if(Security::getType()==1){
            $this->view->show("timeslots/create");
            }else{
                $this->error->show404();
    
            }

    }

    public function store(){
        $result = $this->timeslots->store();

        if($result == 1){
            $data['correcto'] = "Timeslot creado correctamente";
            
        }else{
            $data['error'] = "Ha ocurrido un error al crear el timeslot";
        }

        $this->show($data);


    }


    public function edit(){
        if(Security::getType()==1){
        $data['element'] = $this->timeslots->getElement();
        $this->view->show("timeslots/edit", $data);
        }else{
            $this->error->show404();
        }
    }


    public function update(){
        $result = $this->timeslots->update();

        if($result == 1){
            $data['correcto'] = "Timeslot modificado correctamente";
            
        }else{
            $data['error'] = "Ha ocurrido un error al editar el timeslot";
        }

        
        $this->show($data);
    }


    public function delete(){

        if(Security::getType()==1){
            $result = $this->timeslots->delete();

            if($result>0){
                $data["correcto"] = "Timeslot eliminado correctamente";
            }else{
                $data["error"] = "Ha ocurrido un error al eliminar el timeslot";
            }
    
            $this->show($data);
    
        }else{
            
            $this->error->show404();
        }



        }





}