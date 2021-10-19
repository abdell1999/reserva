<?php


$controller = "resources";
$action = "store";

echo "<div class='container'> <h1>Agregar recurso</h1>";

echo "<form role='form' enctype='multipart/form-data' method='POST' action='index.php?controller=$controller&action=$action'>
<div class='form-group'>
  <label for='name'>Nombre:</label>
  <input type='text' class='form-control' name='name' required>
</div>
<div class='form-group'>
  <label for='description'>Descripción:</label>
  <input type='text' class='form-control' name='description' required>
</div>
<div class='form-group'>
  <label for='location'>Ubicación:</label>
  <input type='text' class='form-control' name='location' required>
</div>





<div class='form-group'>
  <label for='image'>Imagen:</label>
  <input type='file' class='form-control' name='image' required>
</div>




<button type='submit' class='btn btn-success'>Agregar</button>
<a href='index.php' class='btn btn-dark'>Volver</a>
</form></div>";
