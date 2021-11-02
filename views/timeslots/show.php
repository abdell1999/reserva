<?php

$timeslots = $data["timeslots"];


if(isset($data["message"])){
    $mensaje = $data["message"];
    echo $data["message"];
    echo "<br>";





}



//Esto es por si decido cambiar el nombre de los métodos del controlador o el controlador en sí
$controller = "timeslots";
$eliminar = "delete";
$crear = "create";
$editar = "edit";


echo "<script type='text/javascript'>
function confirmar(id)
{
    if(confirm('¿Estás segur@ de que quieres eliminar este recurso (ESTE PROCESO ES IRREVERSIBLE)?'))
    {
        window.location.href = 'index.php?controller=timeslots&action=delete&id='+id;
    }
}
</script>";



echo "<main class='py-4'>";
if(isset($data["error"])){
    
    echo "<div class='alert alert-danger' role='alert'>";
    echo $data["error"];
    echo "</div>";

  }
if(isset($data["correcto"])){
  echo "<div class='alert alert-success' role='alert'>";
  echo $data["correcto"];
  echo "</div>";



}





echo "<a class='btn btn-success' href='index.php?controller=$controller&action=$crear'><i class='fa fa-plus'></i>&nbsp;Agregar timeslot </a>";

echo "<table class='table table-bordered grocery-crud-table table-hover' id='tablaTimeslots'>
            <thead>
              <tr>
                <th>Día de la semana</th>
                <th>Hora de inicio</th>
                <th>Hora de finalización</th>
                <th>Acciones</th>

              </tr>
            </thead>";


//$timeslot['name']
foreach ($timeslots as $timeslot) {

    $id = $timeslot["id"];

    echo "<tbody>
        <tr>
      <td>";
      
      echo $timeslot['dayOfWeek'];
      echo "</td><td>";
      echo $timeslot['startTime'];
      echo "</td><td>";
      echo $timeslot['endTime'];
      echo "</td>
      <td>
      <a class='btn btn-warning' href='index.php?controller=$controller&action=$editar&id=$id'>Editar</a>";
      echo "<a class='btn btn-danger' href='#' onclick='confirmar($id)'>Eliminar</a>";
      
      echo "</td>

    </tr>
    <?php } ?>
  </tbody>";
  }
  
echo "</table></div></main>";