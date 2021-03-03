<?php

function MaiorMenorValores($valores) 
{

    $ArrayMaiorMenor = array();

    $ArrayMaiorMenor = decodeJson();
    

    if (is_numeric($valores)) {
        $ArrayMaiorMenor[] = $valores;
    }

    $json = json_encode($ArrayMaiorMenor);
    file_put_contents('data.json', $json);

    $maior = max($ArrayMaiorMenor);
    $menor = min($ArrayMaiorMenor);

    echo "O maior número do Array é: ", $maior, "<br><br>";
    echo "O menor número do Array é: ", $menor;
}

function decodeJson()
{
    $numerosJson = file_get_contents('data.json');
    $numeroDecoded = json_decode($numerosJson, true);
    return $numeroDecoded;
}


?>