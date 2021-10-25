<?php

$controller = "users";
$action = "register";




echo " <main class='py-4'>
<div class='container'>
<div class='row justify-content-center'>
<div class='col-md-8'>
<div class='card'>
    <div class='card-header'>Registro</div>

    <div class='card-body'>
        <form method='POST' action='index.php?controller=$controller&action=$action' enctype='multipart/form-data'>
            <div class='form-group row'>
                <label for='username' class='col-md-4 col-form-label text-md-right'>Nombre de usuario:</label>

                <div class='col-md-6'>
                    <input id='name' type='text' class='form-control ' name='username' value='' required autocomplete='username' autofocus>

                                                </div>
            </div>



            <div class='form-group row'>
                <label for='realname' class='col-md-4 col-form-label text-md-right'>Nombre:</label>

                <div class='col-md-6'>
                    <input id='realname' type='text' class='form-control ' name='realname' value='' required autocomplete='realname' autofocus>

                                                </div>
            </div>





            <div class='form-group row'>
                <label for='lastname1' class='col-md-4 col-form-label text-md-right'>Primer apellido:</label>

                <div class='col-md-6'>
                    <input id='lastname1' type='text' class='form-control ' name='lastname1' value='' required autocomplete='lastname1' autofocus>

                                                </div>
            </div>





            <div class='form-group row'>
                <label for='lastname2' class='col-md-4 col-form-label text-md-right'>Segundo apellido:</label>

                <div class='col-md-6'>
                    <input id='lastname2' type='text' class='form-control ' name='lastname2' value='' autocomplete='lastname2' autofocus>

                                                </div>
            </div>









            <div class='form-group row'>
                <label for='email' class='col-md-4 col-form-label text-md-right'>Correo electrónico</label>

                <div class='col-md-6'>
                    <input id='email' type='email' class='form-control ' name='email' value='' required autocomplete='email'>

                                                </div>
            </div>

            <div class='form-group row'>
                <label for='password' class='col-md-4 col-form-label text-md-right'>Contraseña</label>

                <div class='col-md-6'>
                    <input id='password' type='password' class='form-control ' name='password' required autocomplete='new-password'>

                                                </div>
            </div>

            <div class='form-group row'>
                <label for='password-confirm' class='col-md-4 col-form-label text-md-right'>Confirmar contraseña</label>

                <div class='col-md-6'>
                    <input id='password-confirm' type='password' class='form-control' name='password_confirmation' required autocomplete='new-password'>
                </div>
            </div>
            <div class='form-group row mb-0'>
                <div class='col-md-6 offset-md-4'>
                    <button type='submit' class='btn btn-primary'>
                        Registro
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</main>";