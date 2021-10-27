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





}