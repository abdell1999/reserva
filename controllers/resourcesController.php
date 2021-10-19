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





}