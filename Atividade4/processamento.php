<?php

$num = $_GET["num"];
$mensagem = "";

if ($num <=0) {
    $mensagem = "O número ". $num ." não é válido";
}
else if ($num % 2 === 0) {
    $mensagem = "O número $num é par!";
} else {
    $mensagem = "O número $num é impar!";
}
echo $mensagem;