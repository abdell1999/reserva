<?php
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


$reservations = $data['reservations'];
echo "<script type='text/javascript'>
function confirmar(idResource, idUser, idTimeslot)
{
    if(confirm('¿Estás segur@ de que quieres eliminar esta reserva (ESTE PROCESO ES IRREVERSIBLE)?'))
    {
        window.location.href = 'index.php?controller=reservations&action=delete&idResource='+idResource+'&idUser='+idUser+'&idTimeslot='+idTimeslot;
    }
}

</script>";

echo "<table class='table table-bordered grocery-crud-table table-hover' id='tablareservations'>
            <thead>
              <tr>
                <th>Recurso</th>
                <th>Profesor</th>
                <th>Fecha</th>
                <th>Tramo</th>
                <th>Acciones</th>

              </tr>
            </thead>";



foreach ($reservations as $reservation) {

  
  echo "<tbody>
        <tr>
      <td>";
      
      echo $reservation['name'];
      echo "</td><td>";
      echo $reservation['realname'];
      echo " ";
      echo $reservation['lastname1'];
      echo " ";
      echo "</td><td>";
      echo substr($reservation['date'], 0, 10);;
      $date = $reservation['date'];
      

      echo "</td><td>";
      echo $reservation['startTime'];
      echo " - ";
      echo $reservation['endTime'];
      echo "</td>
      <td>";


    $idResource = $reservation['id_resource'];
    $idUser = $reservation['id_user'];
    $idTimeslot = $reservation['id_timeslot'];
    $date = $reservation['date'];



      echo "<a class='btn btn-danger' href='#' onclick='confirmar($idResource, $idUser, $idTimeslot)'>Eliminar</a>";
      
      echo "</td>

    </tr>
    
  </tbody>";
  }
  
echo "</table></div></main>";








