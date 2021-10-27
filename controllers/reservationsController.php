<?php

include_once ("view.php");
include_once ("models/reservations.php");
include_once ("models/timeslots.php");




class ReservationsController {

    private $view, $reservations;

    public function __construct() {
    
        $this->view = new View();
        $this->reservations = new Reservation();
        $this->timeslots = new Timeslots();
    }


    public function show(){
        //$data['list'] = $this->res->get();
        $this->view->show("reservations/show");
    }


    public function create(){


        $data['Lunes'] = $this->timeslots->getTimeslot("Lunes");
        $data['Martes'] = $this->timeslots->getTimeslot("Martes");
        $data['Miércoles'] = $this->timeslots->getTimeslot("Miércoles");
        $data['Jueves'] = $this->timeslots->getTimeslot("Jueves");
        $data['Viernes'] = $this->timeslots->getTimeslot("Viernes");

        $this->view->show("reservations/create", $data);

    }







}