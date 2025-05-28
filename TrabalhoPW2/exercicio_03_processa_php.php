<?php

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
    $peso = isset($_POST['peso']) ? floatval($_POST['peso']) : 0;
    $altura = isset($_POST['altura']) ? floatval($_POST['altura']) : 0;

    if ($peso > 0 && $altura > 0) {
        // Calcula o IMC
        $imc = $peso / ($altura * $altura);

        // Define a classificação do IMC
        if ($imc < 18.5) {
            $classificacao = "Abaixo do peso";
        } elseif ($imc >= 18,5 < 25) {
            $classificacao = "Peso normal";
        } elseif ($imc >= 25 < 30) {
            $classificacao = "Sobrepeso";
        } elseif ($imc >= 30 < 35) {
            $classificacao = "Obesidade grau I";
        } elseif ($imc >= 35 < 40) {
            $classificacao = "Obesidade grau II";
        } else {
            $classificacao = "Obesidade grau III";
        }
    }
    else {
        $imc = null;
        $classificacao = "Dados inválidos.";
    }
} else {
    $imc = null;
    $classificacao = "Nenhum dado informado.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado IMC</title>
</head>
<body>
    <h2>Resultado do IMC</h2>
    <?php if ($imc !== null): ?>
        <p>IMC: <?php echo number_format($imc, 2, ',', '.'); ?></p>
        <p>Classificação: <strong><?php echo $classificacao; ?></strong></p>
    <?php else: ?>
        <p><?php echo $classificacao; ?></p>
    <?php endif; ?>
</body>
</html>


