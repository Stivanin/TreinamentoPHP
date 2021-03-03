<?php

function converteMetros($metros)
{
    $centimetros = ($metros *  100);
    return $centimetros;
}
    $valor = 0;
    if (isset($_POST['tamInput'])) {
        $valor = $_POST['tamInput'];
    }

    $resultado = converteMetros($valor);
    echo $valor, " metros são: ", $resultado, " centímetros";
?>

<br><br>
<form action="" method="POST">
<label>Coloque o valor em metros:</label><br>
<input type="text" id="tamInput" name="tamInput"><br><br>
<button type="submit">Submit</button>
</form>
<form action="/" method="GET">
<button type="submit">Voltar à Página Principal</button>
</form>