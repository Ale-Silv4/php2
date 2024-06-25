<?php

$v1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];


$maior = $v1[0];
$menor = $v1[0];
$soma = 0;
$qtd_pares = 0;


foreach ($v1 as $valor) {
    if ($valor > $maior) {
        $maior = $valor;
    }
    if ($valor < $menor) {
        $menor = $valor;
    }
    $soma += $valor;
    if ($valor % 2 == 0) {
        $qtd_pares++;
    }
}


$media = $soma / count($v1);


$per_pares = ($qtd_pares / count($v1)) * 100;


echo "Maior valor: $maior\n";
echo "Menor valor: $menor\n";
echo "Percentual de números pares: " . number_format($per_pares, 2) . "%\n";
echo "Média dos elementos do vetor: " . number_format($media, 2) . "\n";
?>