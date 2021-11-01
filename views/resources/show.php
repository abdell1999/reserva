<?php

$resources = $data["list"];
$type = $data["type"];

echo "<main class='py-4'>";
if(isset($data["message"])){
    
    echo "<div class='alert alert-danger' role='alert'>";
    echo $data["message"];
    echo "</div>";

  }
if(isset($data["message1"])){
  echo "<div class='alert alert-success' role='alert'>";
  echo $data["message1"];
  echo "</div>";



}









//Esto es por si decido cambiar el nombre de los métodos del controlador o el controlador en sí
$controller = "resources";
$eliminar = "delete";
$crear = "create";
$editar = "edit";

if($type == 1){
  echo "<a class='btn btn-success' href='index.php?controller=$controller&action=$crear'><i class='fa fa-plus'></i>&nbsp;Agregar recurso </a>";
}





echo "<table class='table table-bordered grocery-crud-table table-hover' id='tablaRecursos'>
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Ubicación</th>
                <th>Imagen</th>";
                if(Security::thereIsSession()){
                echo "<th>Acciones</th>";
                }
              echo "</tr>
            </thead>";


//$resource['name']
foreach ($resources as $resource) {

    $id = $resource["id"];

    echo "<tbody>
        <tr>
      <td>";
      
      echo $resource['name'];
      echo "</td><td>";
      echo $resource['description'];
      echo "</td><td>";
      echo $resource['location'];
      echo "</td><td>";

        $imagen = $resource["image"];

      echo "<img class='card-img-top col-md-4 d-none d-md-block ml-6' src='$imagen' alt='Imagen'>
      </td>";

      if($type == 1){
     echo "<td>
      <a class='btn btn-warning' href='index.php?controller=$controller&action=$editar&id=$id'>Editar</a>
      <a class='btn btn-danger' href='index.php?controller=$controller&action=$eliminar&id=$id'>Eliminar</a>"; 
      
      
      }

      if(Security::thereIsSession()){
        if($type == 0){ //Si existe una sesion y es de tipo normal creara la etiqueta td ya que esta no habra sido creada arriba si no, no y asi no hay dos por lo cual la tabla estara mejor encuadrada
          echo "<td>";
        }

        echo " <a class='btn btn-dark' href='index.php?controller=reservations&action=create&id=$id'>Reservar</a>";
      }

      
      echo "</td>";

   echo " </tr>";
    }
  echo "</tbody>";
  
  
echo "</table></div></main>";