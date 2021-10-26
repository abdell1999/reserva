<?php

include_once ("view.php");
include_once ("models/reservas.php");


class ReservasController {

    private $view, $reservas;

    public function __construct() {
    
        $this->view = new View();
        $this->reservas = new Reserva();
    }





}