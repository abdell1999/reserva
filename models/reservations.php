<?php

include_once("db.php");
include_once("security.php");

class Reservation
{

    
    public function __construct()
    {
       DB::createConnection(); 
    }

}