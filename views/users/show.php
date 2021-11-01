<?php

$users = $data["users"];

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












//Esto es por si decido cambiar el nombre de los métodos del controlador o el controlador en sí
$controller = "users";
$eliminar = "delete";
$crear = "showRegister";
$editar = "edit";


  echo "<a class='btn btn-success' href='index.php?controller=$controller&action=$crear'><i class='fa fa-plus'></i>&nbsp;Agregar usuario </a>";






echo "<table class='table table-bordered grocery-crud-table table-hover' id='tablaUsuarios'>
            <thead>
              <tr>
                <th>Nombre completo</th>
                <th>Usuario</th>
                <th>Correo</th>";
                
                
                echo "<th>Acciones</th>";
                
              echo "</tr>
            </thead>";



foreach ($users as $user) {

    $id = $user["id"];

    echo "<tbody>
        <tr>
      <td>";
      
      echo $user['realname'];
      echo " ";
      echo $user['lastname1'];
      echo " ";
      echo $user['lastname2'];
      echo "</td><td>";
      echo $user['username'];
      echo "</td><td>";
      echo $user['email'];
      echo "</td>";


   
     echo "<td>
      <a class='btn btn-warning' href='index.php?controller=$controller&action=$editar&id=$id'>Editar</a>
      <a class='btn btn-danger' href='index.php?controller=$controller&action=$eliminar&id=$id'>Eliminar</a>"; 
      
      
      echo "</td>";

   echo " </tr>";
    }
  echo "</tbody>";
  
  
echo "</table></div></main>";