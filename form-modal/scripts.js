function loadExampleForm() {
    $.ajax({
        type: 'GET',
        url: 'form.php',
        success: function (response) {
            $('#id-form-content').html(response);
        }
    });
}

function loadExampleForm2() {
    $.ajax({
        type: 'GET',
        url: 'form.php',
        success: function (response) {
            $('#id-form-content').html(response);
        }
    });
}