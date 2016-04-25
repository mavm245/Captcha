<?php

echo "<h1> Captcha de prueba</h1>";

echo "  <form  action='recibir.php' method='post'>
        <p>Campo 1</p>
        <input type='text' name='msj' id='msj'/>
        <div class='g-recaptcha' data-sitekey='Introducir aquí la clave del sitio otorgada por Google'></div>
        <input type='submit' name='Enviar' value='enviar'/>
        </form>

        <script src='https://www.google.com/recaptcha/api.js'></script>

";
?>
