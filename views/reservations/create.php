<?php

echo "<main class='py-4'>";
$resource = $data['resource'][0];

echo "<div>";
echo "<h2>Reserva de:</strong> ".$resource['name']."</h2>";
echo "<p><strong>Descripción:</strong> ".$resource['description']."<p>";
echo "<p><strong>Ubicación:</strong> ".$resource['location']."<p>";
echo "<p><strong>Imagen:</strong> </p><br>";

$image = $resource['image'];
$idResource = $resource['id'];

echo "<img class='card-img-top col-md-4 d-none d-md-block ml-6' src='$image' alt='Imagen'>";

echo "</div>";
echo "<form method='POST' action='index.php?controller=reservations&action=mostrarHorario'>";
echo "<div>";
echo "<input type='hidden' name='idResource' id='idResource' value=$idResource>";
echo "<strong>Seleccione la fecha de la reserva:</strong> ";
echo "<input type='date' name='fecha' id='fecha' value=".date("Y-m-d")." min=".date("Y-m-d").">";


echo "<br>";
echo "<input type='submit' class='btn btn-success' value='Mostrar horarios disponibles'>";
echo "</form>";

echo "</div>";

echo "</main>";


