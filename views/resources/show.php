<?php

$resources = $data["list"];


if(isset($data["message"])){

    echo $data["message"];

}

$controller = "resources";
$eliminar = "delete";



echo "<table class='table table-bordered grocery-crud-table table-hover'>
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

      echo "<img class='card-img-top col-md-4 d-none d-md-block ml-6' src='$imagen' alt='Cartel'>
      </td>
      <td>
      <a class='btn btn-warning' href='#'>Editar</a>
      <a class='btn btn-danger' href='index.php?controller=$controller&action=$eliminar&id=$id'>Eliminar</a> 
      
      </td>

    </tr>
    <?php } ?>
  </tbody>";
  }
  
echo "</table></div>";