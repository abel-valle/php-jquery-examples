$("#id-form-input").submit(function (event) {
    // Se usa ajax para realizar una invocación sin navegar al archivo receiver.php.
    $.ajax({
        type: 'POST',
        url: 'receiver.php',
        data: $("#id-form-input").serialize(),
        success: function (response) {
            // Lo que el php ponga en un echo se guarda en 'response'.
            $('#id-content-input').html(response);
        }
    });
    // Evita la ejecución del evento 'submit' del botón.
    event.preventDefault();
});

$("#id-form-textarea").submit(function (event) {
    $.ajax({
        type: 'POST',
        url: 'receiver.php',
        data: $("#id-form-textarea").serialize(),
        success: function (response) {
            $('#id-content-textarea').html(response);
        }
    });

    event.preventDefault();
});

$("#id-form-checkbox").submit(function (event) {
    $.ajax({
        type: 'POST',
        url: 'receiver.php',
        data: $("#id-form-checkbox").serialize(),
        success: function (response) {
            $('#id-content-checkbox').html(response);
        }
    });

    event.preventDefault();
});

$("#id-form-option").submit(function (event) {
    $.ajax({
        type: 'POST',
        url: 'receiver.php',
        data: $("#id-form-option").serialize(),
        success: function (response) {
            $('#id-content-option').html(response);
        }
    });

    event.preventDefault();
});

$("#id-form-select").submit(function (event) {
    $.ajax({
        type: 'POST',
        url: 'receiver.php',
        data: $("#id-form-select").serialize(),
        success: function (response) {
            $('#id-content-select').html(response);
        }
    });

    event.preventDefault();
});
