<?php

echo "<div class='row justify-content-center'><div class='col-md-8'><div class='card'>
<div class='card-header'>Acceder</div><div class='card-body'>
<form method='POST' action='por poner algo aqui'>
    <div class='form-group row'>
        <label for='email' class='col-md-4 col-form-label text-md-right'>Correo electrónico</label>

        <div class='col-md-6'>
            <input id='email' type='email' class='form-control ' name='email' value='' required='' autocomplete='email' autofocus=''>

                                        </div>
    </div>

    <div class='form-group row'>
        <label for='password' class='col-md-4 col-form-label text-md-right'>Contraseña</label>

        <div class='col-md-6'>
            <input id='password' type='password' class='form-control ' name='password' required='' autocomplete='current-password'>

                                        </div>
    </div>

    <div class='form-group row'>
        <div class='col-md-6 offset-md-4'>
            <div class='form-check'>
                <input class='form-check-input' type='checkbox' name='remember' id='remember'>

                <label class='form-check-label' for='remember'>
                    Recuérdame
                </label>
            </div>
        </div>
    </div>

    <div class='form-group row mb-0'>
        <div class='col-md-8 offset-md-4'>
            <button type='submit' class='btn btn-primary'>
                Acceder
            </button>

                                                <a class='btn btn-link' href='#yasevera que se pone aqui'>
                    ¿Olvidaste tu contraseña?
                </a>
                                        </div>
    </div>
</form>
</div></div></div></div></div>";