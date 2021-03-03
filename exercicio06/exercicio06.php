<?php

function diaDaSemana($ponteiro)

{
    if ($ponteiro < 1 || $ponteiro > 7) {
        echo "Valor inválido, favor digitar um novo!";
    } else {

        $dias = array("Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", 
        "Sábado");

        $numeroDoDia = $ponteiro - 1;

        echo "O dia que corresponde a esse número é: ", $dias[$numeroDoDia];

    }
}

    $valor = 0;
    
if (isset($_POST['diaInput'])) {
     $valor = $_POST['diaInput'];
     diaDaSemana($valor);
}
?>

<br><br>
<form action="" method="POST">
<label>Digite um número correspondente a um dia da semana (1 a 7): </label><br>
<input type="text" id="diaInput" name="diaInput"><br><br>
<button type="submit">Submit</button>
</form>

<form action="/" method="GET">
<button type="submit">Voltar à Página Principal</button>
</form>