<?php
    # variáveis
    $nome = "Marcelo"; //string
    $idade = 33; //int
    $magro = "NÃO" // boolean
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conceitos Básicos</title>
</head>
<body>
    <h1>PHP - Conceitos Básicos</h1>
    <p>Nome: <?php echo($nome) ?> </p>
    <p>Idade: <?php print($idade) ?> </p>
    <p>Magro: <?=$magro?> </p>
</body>
</html>