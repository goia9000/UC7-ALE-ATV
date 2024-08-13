<?php


$altura = $_GET["altura"];
$peso = $_GET["peso"];
$mensagem = "";

$imc = $peso/($altura**2);
$imcFormatado = number_format($imc, 2, ',','.');

if ($imcFormatado <= 18.5) {
    $mensagem = "Você está abaixo do peso com um IMC de: $imcFormatado";
}    
elseif ($imcFormatado >18.5 && $imcFormatado <= 24.9) {
    $mensagem = "Você está com o peso normal com um IMC de $imcFormatado";
}
elseif ($imcFormatado > 24.9 && $imcFormatado <= 29.9) {
    $mensagem = "Você está com sobrepeso com um IMC de $imcFormatado";
}
elseif ($imcFormatado > 29.9 && $imcFormatado <= 34.9) {
    $mensagem = "Você está com obesidade grau 1 com um imc de $imcFormatado";
}
elseif ($imcFormatado > 34.9 && $imcFormatado <= 39.9) {
    $mensagem = "Você está com obesidade grau 2 com um imc de $imcFormatado";
}
else {
    $mensagem = "Você está com uma obesidade de grau 3 com um imc de $imcFormatado";
}
echo $mensagem;
