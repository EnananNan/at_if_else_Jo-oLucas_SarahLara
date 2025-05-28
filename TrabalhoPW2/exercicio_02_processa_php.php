<?php

// variaveis

$temperatura = $_GET['temperatura01'];

if ($temperatura < 0){
    echo "congelante!". $temperatura;
}
elseif ($temperatura >= 0 < 15)
{
echo "muito frio!". $temperatura;
}

elseif ($temperatura >= 15 < 25) {
echo "aluno aprovado!". $temperatura;
}
else {
    echo "muito quente!". $temperatura;
}

?>