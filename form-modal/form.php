<?php
// Se coloca la respuesta para que ajax lo interprete como success.
http_response_code(200);

// Echo de código de formulario.
echo "
<form action='' method=''>
    <div class='form-group'>
        <label for='exampleFormControlInput1'>Dirección de correo</label>
        <input type='email' class='form-control' id='exampleFormControlInput1' placeholder='name@example.com'>
    </div>
    <div class='form-group'>
        <label for='exampleFormControlSelect1'>Ejemplo de select</label>
        <select class='form-control' id='exampleFormControlSelect1'>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class='form-group'>
        <label for='exampleFormControlSelect2'>Ejemplo de select</label>
        <select multiple class='form-control' id='exampleFormControlSelect2'>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class='form-group'>
        <label for='exampleFormControlTextarea1'>Ejemplo textarea</label>
        <textarea class='form-control' id='exampleFormControlTextarea1' rows='3'></textarea>
    </div>
</form>";
?>