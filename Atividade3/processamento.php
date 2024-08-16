<?php

$var1 = $_GET["var1"];
$var2 = $_GET["var2"];

$var3 = $var1;
$var1 = $var2;
$var2 = $var3;

echo "Olá, a primeira variável trocada é: " . $var1 . " e a segunda variável trocada é: " . $var2;