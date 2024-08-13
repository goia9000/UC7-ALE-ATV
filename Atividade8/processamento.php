<?php
$custo = $_GET["custo"];
$imposto = $_GET["imposto"];
$percentual = $_GET["percentual"];

$calcImposto = ($imposto*$custo)/100; // % do imposto
$custoComImposto = $custo+$calcImposto;
$calcPercentual = ($percentual*$custoComImposto) / 100; // % do lucro sobre o total com imposto
$valorFinal = $custoComImposto+$calcPercentual;

echo "O valor final do veículo é de R$".$valorFinal." com um imposto de R$".$calcImposto." ($imposto %)e uma margem de lucro de: R$ ".$calcPercentual. "($percentual %)";