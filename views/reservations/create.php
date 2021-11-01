<?php

echo "<script src='assets/reservations/crearReservas.js'></script>";
echo "<main class='py-4'>";
$resource = $data['resource'][0];

echo "<div class='float-left'>";
echo "<h2>Reserva de:</strong> ".$resource['name']."</h2>";
echo "<p><strong>Descripción:</strong> ".$resource['description']."<p>";
echo "<p><strong>Ubicación:</strong> ".$resource['location']."<p>";
echo "<p><strong>Imagen:</strong> </p><br>";

$image = $resource['image'];

echo "<img class='card-img-top col-md-4 d-none d-md-block ml-6' src='$image' alt='Imagen'>";

echo "</div>";

echo "<div class='float-right'>";





echo "<select>
<option hidden>1</option>
<option>2</option>
<option>3</option>
<option>4</option>


</select>";
echo "</div>";

echo "</main>";

