<?php

include("controllers/resourcesController.php");
include("controllers/usersController.php");


//$controller -> CONTROLADOR
//$action -> MÉTODO




session_start();
if (!isset($_REQUEST['controller']) && !isset($_REQUEST['action'])) {
    
        $controller = "resources";
        $action = "show";

    } else {
    
        $controller = $_REQUEST['controller'];
        $action = $_REQUEST['action'];
    }
    

    $nombreClase = ucfirst($controller)."Controller";
    $controller = new $nombreClase;
    
    //$controller = new ResourcesController();
    //$controller->show();

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
    }else{
        $id = null;
    }
    
    $controller->$action($id);
    

