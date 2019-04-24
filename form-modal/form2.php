<?php
// Se coloca la respuesta para que ajax lo interprete como success.
http_response_code(200);

// Echo de código de formulario.
echo "
<form action='' method=''>
    <div class='form-group'>
        <label for='exampleFormControlInput1'>Nombre</label>
        <input type='text' class='form-control' id='exampleFormControlInput1' placeholder='Nombre'>
    </div>
    <div class='form-group'>
        <label for='exampleFormControlInput2'>Edad</label>
        <input type='number' class='form-control' id='exampleFormControlInput2' placeholder='Edad' step='1' min='1'>
    </div>
    <div class='form-group'>
        <label for='exampleFormControlInput3'>Dirección de correo</label>
        <input type='email' class='form-control' id='exampleFormControlInput3' placeholder='name@example.com'>
    </div>
</form>";
?>