<?php

function mediaValores($valores) 
{

    $numerosArr = array();

    $numerosArr = decodeJson();
    

    if (is_numeric($valores)) {
        $numerosArr[] = $valores;
    }

    $json = json_encode($numerosArr);
    file_put_contents('data.json', $json);

    $media = array_sum($numerosArr)/count($numerosArr);

    echo "A média é: ";
    echo $media;
}

function decodeJson()
{
    $numerosJson = file_get_contents('data.json');
    $numeroDecoded = json_decode($numerosJson, true);
    return $numeroDecoded;
}


?>