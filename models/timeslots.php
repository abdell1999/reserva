<?php

include_once("db.php");
include_once("security.php");

class Timeslots
{

    
    public function __construct()
    {
        DB::createConnection();
    }
    

    public function get()
    {
       $result = DB::dataQuery("SELECT * FROM timeslots");
       return $result;
    }


    public function getTimeslot($dayOfWeek){
        $result = DB::dataQuery("SELECT * FROM timeslots WHERE dayOfWeek = '$dayOfWeek'");
        return $result;
    }


    public function store(){
        if(isset($_REQUEST['dayOfWeek']) && isset($_REQUEST['startTime']) && isset($_REQUEST['endTime'])){

            $dayOfWeek = $_REQUEST['dayOfWeek'];
            $startTime = $_REQUEST['startTime'];
            $endTime = $_REQUEST['endTime'];

            $result = DB::dataManipulation("INSERT INTO timeslots(dayOfWeek,startTime,endTime) VALUES ('$dayOfWeek', '$startTime', '$endTime')");

        }else{
            $result = null;
        }

        return $result;
    }


    public function getElement($id = null)
    {
        if($id == null){
            $id = $_REQUEST['id'];
        }
       $result = DB::dataQuery("SELECT * FROM timeslots WHERE id=$id");
       return $result;
    }



    public function update(){

        if(isset($_REQUEST['id']) && isset($_REQUEST['dayOfWeek']) && isset($_REQUEST['startTime']) && isset($_REQUEST['endTime'])){

            $id = $_REQUEST['id'];
            $dayOfWeek = $_REQUEST['dayOfWeek'];
            $startTime = $_REQUEST['startTime'];
            $endTime = $_REQUEST['endTime'];

            $result = DB::dataManipulation("UPDATE timeslots SET dayOfWeek='$dayOfWeek', startTime='$startTime', endTime='$endTime' WHERE id='$id'");

        }else{
            $result = null;
        }

        
        return $result;
    }




}