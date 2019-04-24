<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Se coloca la respuesta para que ajax lo interprete como success.
http_response_code(200);

if( isset($_POST['inputs-time']) ) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $remember = $_POST['remember'];

    echo "
        <p>email: $email</p>
        <p>pwd: $pwd</p>
        <p>remember: $remember</p>";
}

if( isset($_POST['textarea-time']) ) {
    $comment = $_POST['comment'];

    echo "
        <p>comment: $comment</p>";
}

if( isset($_POST['checkbox-time']) ) {
    $checks = $_POST['checks'];

    echo "<p>Tamaño: " . sizeof($checks) . "</p>";

    foreach($checks as $chk) {
        echo "<p>checks: $chk</p>";
    }
}

if( isset($_POST['option-time']) ) {
    $opts = $_POST['opts'];

    echo "<p>opts: $opts</p>";
}

if( isset($_POST['select-time']) ) {
    $sel = $_POST['sel'];

    echo "<p>opts: $sel</p>";
}
?>