<?php



$controller = "users";
$action = "login";

echo "<main class='py-4'>";
if(isset($data['error'])){
    echo "<div class='alert alert-danger' role='alert'>";
    echo $data["error"];
    echo "</div>";

}



echo "<div class='row justify-content-center'><div class='col-md-8'><div class='card'>
<div class='card-header'>Acceder</div><div class='card-body'>
<form method='POST' action='index.php?controller=$controller&action=$action'>
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

 

    <div class='form-group row mb-0'>
        <div class='col-md-8 offset-md-4'>
            <button type='submit' class='btn btn-primary'>
                Acceder
            </button>

                                                
                                        </div>
    </div>
</form>
</div></div></div></div></div></main>";