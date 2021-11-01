<?php

echo "<main class='py-4'>";

$resource = $data['resource'][0];
$horario = $data['horario'];

$fecha = $horario['fecha'];


$dias = $horario['diaSeleccionado'];

$ocupado = $horario['ocupado'];





echo "<div>";
echo "<h2>Reserva de:</strong> ".$resource['name']."</h2>";
echo "<p><strong>Descripción:</strong> ".$resource['description']."<p>";
echo "<p><strong>Ubicación:</strong> ".$resource['location']."<p>";
echo "<p><strong>Imagen:</strong> </p><br>";

$image = $resource['image'];
$idResource = $resource['id'];

echo "<img class='card-img-top col-md-4 d-none d-md-block ml-6' src='$image' alt='Imagen'>";

echo "</div>";
echo "<form method='POST' action='index.php?controller=reservations&action=store'>";
echo "<div>";
echo "<input type='hidden' name='idResource' id='idResource' value=$idResource>";
echo "<strong>Fecha de la reserva:</strong> ";
echo $fecha;
echo "<input type='hidden' name='fecha' id='fecha' value=$fecha>";
echo "<br>";
echo "<strong>Seleccione el tramo a reservar:</strong> ";
echo "<select name='idHorario' id='idHorario' required>";







foreach ($dias as $dia) {
    $idDia = $dia['id'];
    $startTime = $dia['startTime'];
    $endTime = $dia['endTime'];



    echo "<option value='$idDia'";

    

    if(isset($horario['ocupado'])){    
    foreach ($ocupado as $o) {
    
        if($o['id_timeslot'] == $idDia){
            echo "disabled";
        }
    }
}



    echo ">$startTime - $endTime</option>";
}



echo "</select>";

echo "<br>";
echo "<strong>Comentarios:</strong> ";
echo "<textarea name='remarks' id='remarks' required></textarea>";
echo "<br>";
echo "<input type='submit' class='btn btn-success' value='Hacer reserva'>";

echo "</form>";



echo "</main>";