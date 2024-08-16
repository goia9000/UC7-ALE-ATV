<?php

$nota1 = $_GET["nota1"];
$nota2 = $_GET["nota2"];
$nota3 = $_GET["nota3"];
$nota4 = $_GET["nota4"];

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
$mensagem = "";

if (isset($_GET['nota_exame'])) {
    $nota_exame = floatval($_GET['nota_exame']);
    $nova_media = ($media + $nota_exame) / 2;

    if ($nova_media >= 5) {
        $mensagem = "Você foi aprovado em exame com média $nova_media.";
    } else {
        $mensagem = "Infelizmente, você foi reprovado com média $nova_media.";
    }
} else {
    if ($media >= 7) {
        $mensagem = "Parabéns, você foi aprovado com a média $media.";
    } elseif ($media <= 4) {
        $mensagem = "Você foi reprovado com a média $media.";
    } else {

        echo "Sua média foi $media. Insira a nota do exame:";
        echo "<form action='processamento.php' method='get'>
                <input type='hidden' name='nota1' value='$nota1'>
                <input type='hidden' name='nota2' value='$nota2'>
                <input type='hidden' name='nota3' value='$nota3'>
                <input type='hidden' name='nota4' value='$nota4'>
                <input type='number' name='nota_exame' placeholder='Nota do exame' required step='0.1' min='0' max='10'>
                <input type='submit' value='Calcular Nova Média'>
              </form>";
        exit;
    }
}
echo $mensagem;
