<?php

include_once("models/security.php");

echo "<!DOCTYPE html>
<html lang='es-ES'>

<head>

    <title>Sistema de Reservas de Recursos Informáticos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    





</head>

<body>
    <div class='container'>

    <nav class='navbar navbar-expand-md navbar-light bg-white shadow-sm'>
            <div class='container'>
                <a class='navbar-brand' href='index.php'>
                    RESERVAS
                </a>
                <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>

                <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                    <!-- Left Side Of Navbar -->
                    <ul class='navbar-nav mr-auto'>
                    <li>
      <a class='nav-link' href='index.php'>Inicio</a>
    </li>
    <li>
      <a class='nav-link' href='#'>Resources</a>
    </li>
    <li>
      <a class='nav-link' href='#'>TimeSlots</a>
    </li>
    <li>
      <a class='nav-link' href='#'>Users</a>
    </li>
   
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class='navbar-nav ml-auto'>
                        <!-- Authentication Links -->";

                                                                if(Security::thereIsSession()){
                                                                    echo "<li class='nav-item'><a class='nav-link' href='index.php?controller=users&action=show'>Perfil</a>
                                                                    </li>";
                                                                    echo "<li class='nav-item'><a class='nav-link' href='index.php?controller=users&action=logOut'>Cerrar Sesión</a>
                                                                    </li>";
    
                                                                }else{

                                                                
                                                                echo "<li class='nav-item'><a class='nav-link' href='index.php?controller=users&action=showLogin'>Iniciar Sesión</a>
                                                                </li>
                            
                                                                <li class='nav-item'><a class='nav-link' href='index.php?controller=users&action=showRegister'>Registro</a>
                                                                </li>";
                                                                }
                                                                        
                                                                
                    echo "</ul>
                </div>
            </div>
        </nav>












    </div>





    <div class='container'>";