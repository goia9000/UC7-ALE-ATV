<?php


$idade = $_GET["idade"];
$mensagem = "";

if ($idade >= 18) {
    $mensagem = "Você tem $idade, é maior de idade";
} else {
    $mensagem = "Você tem $idade, é menor de idade";
}

echo $mensagem;