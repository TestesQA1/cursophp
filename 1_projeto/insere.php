<?php
    # Dados para conexão
    $host = "127.0.0.1";
    $username = "root";
    $passwd = "caelum";
    $dbname = "fp_73";

    #Abrindo uma conexão com o DB
    $connection = mysqli_connect($host, $username, $passwd, $dbname);
    // var_dump($connection);

    if ($connection) {
        echo "CONEXÃO REALIZADA COM SUCESSO";
        $query = "INSERT INTO produtos (nome, preco, quant) VALUES ('TV', '3000', '1')";
        var_dump(mysqli_query($connection, $query) );
    } else {
        echo "ERRO NA CONEXÃO";
    }

    # Fechando a conexão com o DB
    mysqli_close($connection);
?>