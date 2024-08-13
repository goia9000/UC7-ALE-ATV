<?php


$custo = $_GET["custo"];
$percentual = $_GET["percentual"];
$precoFinal = $custo+(($percentual*$custo)/100);
$mensagem = "O valor final do produto é: R$ $precoFinal com um custo de R$ $custo e um porcentagem de lucro de $percentual%";

echo $mensagem;