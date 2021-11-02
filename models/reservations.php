<?php

include_once("db.php");
include_once("security.php");
include_once("timeslots.php");

class Reservation
{

    
    public function __construct()
    {
       DB::createConnection(); 
    }



    public function mostrarHorario(){

        $idResource = $_REQUEST['idResource'];
        $date = $_REQUEST['fecha'];


        $dias = array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');
        $nombreDia = $dias[date('N', strtotime($date))];
        



        $result['ocupado'] =  DB::dataQuery("SELECT id_timeslot FROM reservations WHERE date = '$date' AND id_resource = '$idResource'");
        //$result['diaSeleccionado'] = DB::dataQuery("SELECT * FROM timeslots WHERE date = '$date'");

        $timeslots = new Timeslots();

        $result['diaSeleccionado'] = $timeslots->getTimeslot($nombreDia);
        $result['idResource'] = $idResource;
        $result['fecha'] = $date;

        //print_r( $result['diaSeleccionado']);

        return $result;





    }


    public function store(){

        $idResource = $_REQUEST['idResource'];
        $fecha = $_REQUEST['fecha'];
        $idHorario = $_REQUEST['idHorario'];
        $remarks = $_REQUEST['remarks'];
        $idUsuario = Security::getUserId();


        $result = DB::dataManipulation("INSERT INTO reservations(id_resource,id_user,id_timeslot,date,remarks) VALUES ('$idResource', '$idUsuario', '$idHorario', '$fecha', '$remarks')");
        return $result;





    }


    public function deleteByResource(){
        $idResource = $_REQUEST['id'];
        $result = DB::dataManipulation("DELETE FROM reservations WHERE id_resource = '$idResource'");
        return $result;
    }



    public function deleteByUser(){
        $idUser = $_REQUEST['id'];
        $result = DB::dataManipulation("DELETE FROM reservations WHERE id_user = '$idUser'");
        return $result;
    }

    public function deleteByTimeslot(){
        $idTimeslot = $_REQUEST['id'];
        $result = DB::dataManipulation("DELETE FROM reservations WHERE id_timeslot = '$idTimeslot'");
        return $result;
    }








}