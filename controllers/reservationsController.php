<?php

include_once ("view.php");
include_once ("models/reservations.php");
include_once ("models/timeslots.php");
include_once ("models/resources.php");




class ReservationsController {

    private $view, $reservations;

    public function __construct() {
    
        $this->view = new View();
        $this->reservations = new Reservation();
        $this->timeslots = new Timeslots();
        $this->resources = new Resources();
    }


    public function show($data = null){
        //$data['list'] = $this->res->get();
        $this->view->show("reservations/show", $data);
    }


    public function create(){

        //Luego hacer que si no devuelve nada lanzar un error 404 por ejemplo
        $data['resource'] = $this->resources->getElement();


        $data['Lunes'] = $this->timeslots->getTimeslot("Lunes");
        $data['Martes'] = $this->timeslots->getTimeslot("Martes");
        $data['Miércoles'] = $this->timeslots->getTimeslot("Miércoles");
        $data['Jueves'] = $this->timeslots->getTimeslot("Jueves");
        $data['Viernes'] = $this->timeslots->getTimeslot("Viernes");

        $this->view->show("reservations/create", $data);

    }



    public function mostrarHorario(){
        $id = $_REQUEST['idResource'];
        $data['resource'] = $this->resources->getElement($id);
        $data['horario'] = $this->reservations->mostrarHorario();
        $this->view->show("reservations/create2", $data);

    }



    public function store(){
        $result = $this->reservations->store();


        if($result == 1){
            $data['correcto'] = "Reservada creada correctamente";
            
        }else{
            $data['error'] = "Ha ocurrido un error al hacer la reserva";
        }

        $this->show($data);
    }







}