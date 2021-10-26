<?php

$userLogged = $data['userLogged'][0];


echo "Aquí apareceran los datos del usuario actual y se dará la opción de cambiar algún dato";
echo "<br><br><br>";


echo $userLogged['email'];


//Crear un metodo en view que no tenga header ni footer para la gestion de errores
//Crear un controlador para los errores
//Crear un método de página no encontrada (404)
//Mostrar error 404 a los usuarios sin permiso para estar donde no deben.
//Enrutador
//Reservas
//Timeslots
//Evitar inyección SQL -> Security::filter($$); -> USAR mysqli_real_escape_string
//Cifrar contraseña
//Validar formularios con javascript por ejemplo
//Confirmacion al eliminar
//Al eliminar un recurso eliminar la imagen que tiene asociada