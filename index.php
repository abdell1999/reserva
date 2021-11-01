<?php

include("controllers/resourcesController.php");
include("controllers/usersController.php");
include("controllers/reservationsController.php");
include("controllers/timeslotsController.php");
include("controllers/errorController.php");



//$controller -> CONTROLADOR
//$action -> MÉTODO




session_start();
if(!isset($_SESSION['type'])){
    $_SESSION['type'] = null;
}



if (!isset($_REQUEST['controller']) && !isset($_REQUEST['action'])) {
    
        $controller = "reservations";
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
    

