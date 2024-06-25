<?php

$v1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$v2 = [5, 6, 7, 8, 9, 10, 11, 12, 13, 14];

function ncomuns ($vetor1, $vetor2) {
    $nrepete1 = array_diff($vetor1, $vetor2);

    $nrepete2 = array_diff($vetor2, $vetor1);
    
    $ncomuns = array_merge($nrepete1, $nrepete2);

    return $ncomuns;
}

    $numerosnaocomuns = ncomuns($vetor1, $vetor2);

    echo "Os números não comuns aos vetores são:".implode(",",$numerosnaocomuns);

?>