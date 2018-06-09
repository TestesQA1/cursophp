
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("inc/header.php"); ?>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col align-self-center">
                <br>
                <h1>Login</h1>
                <br>

                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="usuario@email.com">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" class="form-control" id="senha" placeholder="****">
                    </div>
                    <button type="submit" class="btn btn-primary">Acessar</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>