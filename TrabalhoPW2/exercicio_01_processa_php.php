<?php 
    

// variaveis

$nome_aluno = $_POST['nota_aluno'];
$nota01 = $_POST['nota01'];
$nota02 = $_POST['nota02'];
$nota03 = $_POST['nota03'];


// calculo da média do aluno

$media = ($nota01+$nota02+$nota03) /3;

$resultado = "";

// usando a função IF para validar a situação do aluno

if ($media < 5){
    echo "aluno reprovado!". $media;
}
elseif ($media <6)
{
echo "aluno em recuperação". $media
}

else {
echo "aluno aprovado!". $media;
}

echo $nome_aluno;
echo "<br>"
echo $resultado;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nota alunos</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <div class="container">
        <aside class="lado_direito"><?php echo $nome_aluno?></aside>
        <div class="nota_aluno"><?php echo $resultado?></div>
    </div>
    

</body>
</html>