<?php

require ('funcoes.php');

$numerosIpt = 0;

if (isset($_POST['numerosInput'])) {
    $numerosIpt = $_POST['numerosInput'];
    $media = mediaValores($numerosIpt);
}

?>

<br><br>

<form action="" method="POST">
    <label>Adicione um novo valor ao Array: </label><br>
    <input type="text" id="numerosInput" name="numerosInput"><br><br>
    <button type="submit">Submit</button>
</form>

<form action="/" method="GET">
    <button type="submit">Voltar à Página Principal</button>
</form>