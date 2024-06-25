<?php


    $n = [910,1,2,80,150,164,178,157];



    $i = 0;
    foreach ($n as $numero)
    if ($numero >= 100 && $numero <= 200){
        $i++;
    }

    echo "Quantidade de números entre 100 e 200:".$i;
?>