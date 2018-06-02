<?php
  include("inc/utils.php");
  $page = "EDITAR";
  $connection = getConnection();

  if($connection && $_GET){
    $result = getProductById($connection, $_GET['id']);
    $prod = getProduct($result);
    if(!$prod) {
      header("Location: lista.php?action=edit&message=failed");
    }
  }

  if($connection && $_POST) {
    $updated = updateProduct($connection, $_POST['id'], $_POST['nome'], $_POST['quant'], $_POST['preco']);
    if($updated) {
      header("Location: lista.php?action=edit&message=success");
    } else {
      header("Location: cadastro.php?action=edit&message=failed");
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <?php include("inc/header.php"); ?>
    <title>Projeto CRUD - Editar</title>
  </head>
  <body>
    <?php include("inc/navbar.php");  ?>

    <div class="container">
        <?php include_once("inc/alerts.php");?>
        <form action="editar.php" method="POST">
          <input type="hidden" name="id" value="<?=$prod['id']?>">
          <br>

            <div class="form-row">
            <!-- Produto -->
                <div class="form-group col-md-12">
                <label for="produto">Produto</label>
                <input type="texto" name="nome" class="form-control" id="produto" placeholder="Produto" value="<?=$prod['nome']?>">
                </div>
            
            <!-- Quantidade -->
                <div class="form-group col-md-6">
                <label for="quantidade">Quantidade</label>
                <input type="quantidade" name="quant" class="form-control" id="quantidade" placeholder=Quantidade value="<?=$prod['quant']?>">
                </div>
            
            <!-- Preco -->
                <div class="form-group col-md-6">
                    <label for="preço">Preco</label>
                    <input type="text" name="preco" class="form-control" id="preco" placeholder="Preço" value="<?=$prod['preco']?>">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>

  </body>
</html>