<?php

include_once ("view.php");
include_once ("models/reservations.php");


class ReservationsController {

    private $view, $reservations;

    public function __construct() {
    
        $this->view = new View();
        $this->reservations = new Reservation();
    }


    public function show(){

        //$data['list'] = $this->res->get();
        $this->view->show("reservations/show");

    }




}