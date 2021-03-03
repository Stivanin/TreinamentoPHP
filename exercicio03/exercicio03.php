<?php

function converteCelsius($celsius)
{
    $fahrenheit = ($celsius * (9/5)) + 32;
    return $fahrenheit;
}
    $temperatura = 0;
    if (isset($_POST['tempInput'])) {
        $temperatura = $_POST['tempInput'];
    }

    $resultado = converteCelsius($temperatura);
    echo $temperatura, " graus Celsius"," em graus Fahrenheit é: ", $resultado;
?>

<br><br>
<form action="" method="POST">
<label>Coloque uma temperatura em graus Celsius:</label><br>
<input type="text" id="tempInput" name="tempInput"><br><br>
<button type="submit">Submit</button>
</form>
<form action="/" method="GET">
<button type="submit">Voltar à Página Principal</button>
</form>