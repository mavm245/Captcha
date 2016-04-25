<?php

require_once "recaptchalib.php";
//Descomentar para revisar envio variables por post
//foreach ($_POST as $key => $value) {
//        echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
//      }

// tu clave secreta
$secret = "Clave secreta otorgada por google";

// respuesta vacía
$response = null;

// comprueba la clave secreta
$reCaptcha = new ReCaptcha($secret);


if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

if ($response != null && $response->success) {
        echo "Mensaje " . $_POST["msj"] . " Gracias por registrarte";
      }
?>
