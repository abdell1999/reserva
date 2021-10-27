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


}