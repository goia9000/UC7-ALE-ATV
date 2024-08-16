<?php

$nome = $_POST["nome"];
$salario = $_POST["salario"];
$vendas = $_POST["vendas"];

$comissao = $vendas * 0.15;
$salarioFinal = $comissao + $salario;

$salarioFormatado = number_format($salario, 2, ',', '.');
$vendasFormatado = number_format($vendas, 2, ',', '.');
$comissaoFormatado = number_format($comissao, 2, ',', '.');
$salarioFinalFormatado = number_format($salarioFinal, 2, ',', '.');

echo "Olá " . $nome . " seu salário é de R$ " . $salarioFormatado . ", você fez um total de vendas no valor de R$" . $vendasFormatado . " e sua comissão referente ao valor das vendas é de R$" . $comissaoFormatado . " Portanto, seu salário é de R$" . $salarioFinalFormatado . ".";