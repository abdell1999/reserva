<?php


$controller = "resources";
$action = "update";
$id = $_REQUEST["id"];

$element = $data["element"][0];



$name = $element["name"];
$description = $element["description"];
$location = $element["location"];
$image = $element["image"];

echo "<div class='container'> <h1>Agregar recurso</h1>";

echo "<form role='form' enctype='multipart/form-data' method='POST' action='index.php?controller=$controller&action=$action&id=$id'>
<div class='form-group'>
  <label for='name'>Nombre:</label>
  <input type='text' class='form-control' name='name' value='$name' required>
</div>
<div class='form-group'>
  <label for='description'>Descripción:</label>
  <input type='text' class='form-control' name='description' value='$description' required>
</div>
<div class='form-group'>
  <label for='location'>Ubicación:</label>
  <input type='text' class='form-control' name='location' value='$location' required>
</div>





<div class='form-group'>
  <label for='image'>Imagen:</label>
  <input type='file' class='form-control' name='image' required>

  <br>
  <br>
  Imagen actual:
  <img class='card-img-top col-md-4 d-none d-md-block ml-6' src='$image' alt='Imagen'>

</div>




<button type='submit' class='btn btn-success'>Agregar</button>
<a href='index.php' class='btn btn-dark'>Volver</a>
</form></div>";
