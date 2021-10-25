<?php

$resources = $data["list"];


if(isset($data["message"])){
    $mensaje = $data["message"];
    echo $data["message"];
    echo "<br>";





}



//Esto es por si decido cambiar el nombre de los métodos del controlador o el controlador en sí
$controller = "resources";
$eliminar = "delete";
$crear = "create";
$editar = "edit";


echo "<main class='py-4'><a class='btn btn-success' href='index.php?controller=$controller&action=$crear'><i class='fa fa-plus'></i>&nbsp;Agregar recurso </a>";

echo "<table class='table table-bordered grocery-crud-table table-hover' id='tablaRecursos'>
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Ubicación</th>
                <th>Imagen</th>
                <th>Acciones</th>

              </tr>
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
      </td>
      <td>
      <a class='btn btn-warning' href='index.php?controller=$controller&action=$editar&id=$id'>Editar</a>
      <a class='btn btn-danger' href='index.php?controller=$controller&action=$eliminar&id=$id'>Eliminar</a> 
      
      </td>

    </tr>
    <?php } ?>
  </tbody>";
  }
  
echo "</table></div></main>";