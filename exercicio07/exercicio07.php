<?php

function calculaTriangulo($a1, $a2, $a3)
{

    if ($a1 + $a3 > $a2 && $a1 + $a2 > $a3 && $a2 + $a3 > $a1) {

        echo "Os válores formam um triângulo! <br>";

        if ($a1 == $a2 && $a2 == $a3) {

            echo "Triângulo Equilátero";

        } elseif ($a1 == $a2 || $a2 == $a3 || $a1 == $a3) {

            echo "Triângulo Isósceles";

        } else {

            echo "Trângulo Escaleno";

        }
    } else {
        echo "Os valores não formam um triângulo!";
    }

}

    $valor = 0;
    
if (isset($_POST['lado1'])) {
     $l1 = $_POST['lado1'];
}

if (isset($_POST['lado2'])) {
    $l2 = $_POST['lado2'];
}

if (isset($_POST['lado3'])) {
    $l3 = $_POST['lado3'];
}

calculaTriangulo($l1, $l2, $l3);
?>

<br><br>
<form action="" method="POST">
<label>Digite um valor para cada lado do triângulo: </label><br>
<input type="text" id="lado1" name="lado1"><br><br>
<input type="text" id="lado2" name="lado2"><br><br>
<input type="text" id="lado3" name="lado3"><br><br>
<button type="submit">Submit</button>
</form>

<form action="/" method="GET">
<button type="submit">Voltar à Página Principal</button>
</form>