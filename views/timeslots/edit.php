<?php


$element = $data["element"][0];


$id = $element["id"];
$dayOfWeek= $element["dayOfWeek"];
$startTime = $element["startTime"];
$endTime = $element["endTime"];

$controller = "timeslots";
$action = "update";

echo "<div class='container'> <h1>Editar timeslot</h1>";

echo "<form role='form' enctype='multipart/form-data' method='POST' action='index.php?controller=$controller&action=$action'>
<div class='form-group'>
  <label for='dayOfWeek'>Dia de la semana: (Día actual -> $dayOfWeek)</label>
  
  <select name='dayOfWeek' required class='form-control'>
  <option value='Lunes'>Lunes</option>
  <option value='Martes'>Martes</option>
  <option value='Miercoles'>Miércoles</option>
  <option value='Jueves'>Jueves</option>
  <option value='Viernes'>Viernes</option>
  <option value='Sabado' disabled>Sábado</option>
  <option value='Domingo' disabled>Domigo</option>
  
  
  </select>

</div>

<input type='hidden' name='id' value='$id'>
<div class='form-group'>
  <label for='startTime'>Hora de inicio</label>
  <input type='time' class='form-control' name='startTime' required value='$startTime'>
</div>
<div class='form-group'>
  <label for='endtTime'>Hora de finalización</label>
  <input type='time' class='form-control' name='endTime' required value='$endTime'>
</div>
</div>



<button type='submit' class='btn btn-danger'>Editar</button>
<a href='index.php' class='btn btn-dark'>Volver</a>
</form></div>";
