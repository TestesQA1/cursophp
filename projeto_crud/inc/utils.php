<?php
    function navActive($page, $key) {
            if ($page == $key){
                # echo "active";
                return "active";
            }
        }
    
    function getConnection() {
    # Dados para conexão
    $host = "localhost";
    $username = "root";
    $passwd = "caelum";
    $dbname = "fp_73";

    #Abrindo uma conexão com o DB
    return mysqli_connect($host, $username, $passwd, $dbname);
    // var_dump($connection);
    }

    function getProductById($connection, $id){
        $query = "SELECT * FROM produtos WHERE id={$id}";
        return mysqli_query($connection, $query);
    }

    function getProducts($connection) {
      $query = "SELECT
      p.id,
      p.nome AS nomeProduto,
      p.preco, p.quant,
      c.nome AS nomeCategoria
      FROM produtos AS p
      INNER JOIN
      categorias AS c
      ON
      (p.id_categoria = c.id);";
      $result = mysqli_query($connection, $query);
      return $result;
    }

    function getProduct($result){
        return mysqli_fetch_assoc($result);
    }

    function addProduct($connection, $nome, $preco, $quant, $idcateg){
        $query = "INSERT INTO produtos (nome, preco, quant, id_categoria) VALUES ('{$nome}', {$preco}, '{$quant}', '{$idcateg}')";
        return mysqli_query($connection, $query);
    }

    function updateProduct($connection, $id, $nome, $quant, $preco){
        if($id && is_numeric($id)) {
            $query = "UPDATE produtos SET nome='{$nome}', quant='{$quant}', preco={$preco} WHERE id = '{$id}'";
            return mysqli_query($connection, $query);
        }
        return false;    
    }

    function removeProduct($connection, $id){
        if($id && is_numeric($id)){
            $query = "DELETE FROM produtos WHERE id={$id}";
            return mysqli_query($connection, $query);
        }
        return false;
    }

    function getCategories($connection) {
        $query = "SELECT * FROM categorias";
        return mysqli_query($connection, $query);
    }
?>