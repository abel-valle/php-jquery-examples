function loadExampleForm() {
    $.ajax({
        type: 'GET',
        url: 'form.php',
        success: function (response) {
            alert(response);
            $('#id-form-content').html(response);
        }
    });
}