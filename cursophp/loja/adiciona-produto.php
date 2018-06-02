<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adiciona Produto</title>
</head>
<body>
    <?php include("cabecalho.php") ?>
    <main class="container">
        <article class="principal">
            <?php
                $nome = $_GET["nome"];
                $preco = $_GET["preco"];
            ?>
            <p>
                Produto <?=$nome?>, R$<?=$preco?> adicionado com sucesso!
            </p>
        </article>
    </main>
    <?php include("rodape.php") ?>
</body>
</html>