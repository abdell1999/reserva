<?php


$controller = "timeslots";
$action = "store";

echo "<div class='container'> <h1>Agregar timeslot</h1>";

echo "<form role='form' enctype='multipart/form-data' method='POST' action='index.php?controller=$controller&action=$action'>
<div class='form-group'>
  <label for='dayOfWeek'>Dia de la semana:</label>
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
<div class='form-group'>
  <label for='startTime'>Hora de inicio</label>
  <input type='time' class='form-control' name='startTime' required>
</div>
<div class='form-group'>
  <label for='endtTime'>Hora de finalización</label>
  <input type='time' class='form-control' name='endTime' required>
</div>
</div>



<button type='submit' class='btn btn-success'>Agregar</button>
<a href='index.php' class='btn btn-dark'>Volver</a>
</form></div>";
