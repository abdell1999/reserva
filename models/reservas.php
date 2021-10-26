<?php

include_once("db.php");
include_once("security.php");

class Reserva
{

    
    public function __construct()
    {
       DB::createConnection(); 
    }

}