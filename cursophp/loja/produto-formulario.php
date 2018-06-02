<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adiciona Produto</title>

    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <?php include("cabecalho.php") ?>
    <h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php" method="GET">
        <input type="text" name="nome" placeholder="Nome" autofocus><br>
        <input type="number" name="preco" placeholder="Preço" ><br>
        <button>Cadastrar</button>
    </form>
    <?php include("rodape.php") ?>
</body>
</html>