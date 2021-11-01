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


echo "Aqui irá la lista de reservas";


echo "</main>";



