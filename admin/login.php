<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Its Travel - Agência de Viagens</title>

    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="../itens/style/css/login.css">
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.css">
</head>

<body>

    <div class="container text-center">
        <div class="formulario-login">
            <form class="form-signin" action="../config/login.php" method="post">
                <img class="mb-4" src="../itens/img/logo-site/1.png" alt="" width="200" height="72">
                <h5 class="title text-dark">Painel Administrativo</h5>
                <label for="inputEmail" class="sr-only">Usuário</label>
                <input type="text" name="usuario" id="usuario" class="form-control my-3" placeholder="Usuario" required>
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
                <button class="btn btn-lg btn-primary btn-block my-3 mb-2" type="submit">Acessar</button>
                <a href="#" data-toggle="modal" data-target="#exampleModalCenter">Esqueceu a senha?</a>


                <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Esqueceu sua senha?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                Para recuperar sua senha, favor digite o seu e-mail abaixo:
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Recuperar Senha</button>
            </div>
        </div>
    </div>
</div>


                <p class="mt-5 mb-3 text-muted">&copy; Its Travel 2018-2019</p>
            </form>
        </div>
    </div>

    <!-- JAVASCRIPTS -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

</html>
