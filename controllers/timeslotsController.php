<?php

include_once ("view.php");
include_once ("models/timeslots.php");


class TimeslotsController {

    private $view, $timeslots;

    public function __construct() {
    
        $this->view = new View();
        $this->timeslots = new Timeslots();
    }


    public function show($data = null){

        $data['timeslots'] = $this->timeslots->get();
        $this->view->show("timeslots/show", $data);
    }



    public function create(){
        $this->view->show("timeslots/create");

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





}