<?php
    var_dump($_REQUEST);
    $nome = $_POST["usuario"];
    var_dump($nome);
    $senha = $_POST["senha"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form action="login.php" method="POST">
        <input type="text" name="usuario" placeholder="Usuário" autofocus>
        <input type="password" name="senha" placeholder="Senha" >
        <button>login</button>
    </form>

    <p>Olá <?=$nome?> </p>
    <p>Sua senha é <?=$senha?></p>
</body>
</html>