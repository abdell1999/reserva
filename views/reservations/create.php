<?php

echo "<script src='assets/reservas2.js'></script>";

echo "<br>";
echo "<br>";
echo "<br>";


$lunes = $data['Lunes'];
$martes = $data['Martes'];
$miercoles = $data['Miércoles'];
$jueves = $data['Jueves'];
$viernes = $data['Viernes'];

//echo "<pre>";
//print_r($data);
//echo "</pre>";
//print_r($lunes);
//print_r($martes);
//print_r($miercoles);
//print_r($jueves);
//print_r($viernes);





echo "<label for='start'>Día:</label>

    <input type='date' id='fecha' name='trip-start'
       value='2021-10-27'
       min='2021-10-27' max='2030-12-31' onchange='seleccionarDiaSemana()'>";
       
       
       echo "<div id='rellenableLunes' style ='display:none'>";
       echo "Seleccione en que tramo desea reservar:";
        echo "<select name='timeslotSeleccionado'>";
        foreach ($lunes as $lune) {
            //idDay hace referecia al id del timeslot que seleccionemos
            $idDay = $lune['id'];
            $startTime = substr($lune['startTime'],0,5);
            $endTime = substr($lune['endTime'],0,5);
            echo "<option value='$idDay'>$startTime / $endTime</option>";
            }
            echo "</select>";
            echo "</div>";


            

            echo "<div id='rellenableMartes' style ='display:none'>";
            echo "Seleccione en que tramo desea reservar:";
             echo "<select name='timeslotSeleccionado'>";
             foreach ($martes as $lune) {
                 //idDay hace referecia al id del timeslot que seleccionemos
                 $idDay = $lune['id'];
                 $startTime = substr($lune['startTime'],0,5);
                 $endTime = substr($lune['endTime'],0,5);
                 echo "<option value='$idDay'>$startTime / $endTime</option>";
                 }
                 echo "</select>";
                 echo "</div>";




                 echo "<div id='rellenableMiercoles' style ='display:none'>";
                 echo "Seleccione en que tramo desea reservar:";
                  echo "<select name='timeslotSeleccionado'>";
                  foreach ($miercoles as $lune) {
                      //idDay hace referecia al id del timeslot que seleccionemos
                      $idDay = $lune['id'];
                      $startTime = substr($lune['startTime'],0,5);
                      $endTime = substr($lune['endTime'],0,5);
                      echo "<option value='$idDay'>$startTime / $endTime</option>";
                      }
                      echo "</select>";
                      echo "</div>";
//HHH

                      echo "<div id='rellenableJueves' style ='display:none'>";
                      echo "Seleccione en que tramo desea reservar:";
                       echo "<select name='timeslotSeleccionado'>";
                       foreach ($jueves as $lune) {
                           //idDay hace referecia al id del timeslot que seleccionemos
                           $idDay = $lune['id'];
                           $startTime = substr($lune['startTime'],0,5);
                           $endTime = substr($lune['endTime'],0,5);
                           echo "<option value='$idDay'>$startTime / $endTime</option>";
                           }
                           echo "</select>";
                           echo "</div>";



                           echo "<div id='rellenableViernes' style ='display:none'>";
                           echo "Seleccione en que tramo desea reservar:";
                            echo "<select name='timeslotSeleccionado'>";
                            foreach ($viernes as $lune) {
                                //idDay hace referecia al id del timeslot que seleccionemos
                                $idDay = $lune['id'];
                                $startTime = substr($lune['startTime'],0,5);
                                $endTime = substr($lune['endTime'],0,5);
                                echo "<option value='$idDay'>$startTime / $endTime</option>";
                                }
                                echo "</select>";
                                echo "</div>";
               
          
     







