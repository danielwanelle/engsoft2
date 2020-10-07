<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ HTML::script('css/bootstrap.min');}}
    {{ HTML::script('css/style');}}
    {{ HTML::script('css/users');}}
    <title>Usuários</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <img class="box-illustration" src="./assets/img/login-box.png" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Usuários</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Fornecedores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Notas Fiscais</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Produtos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Centro de Custo</a>
        </li>
    </ul>
    </div>
    </nav>
    <div class="main-content">
        <div class="title-line">
            <div class="page-title">
                <h6>Usuários</h6>
            </div>
            <img class="title-illustration" src="./assets/img/users.png" alt="">
        </div>
        <div class="container">
            <form class="form">
                <div class="form-group col-md-8">
                    <label class="label-form" for="login">Login</label>
                    <input type="text" class="form-control" id="login" maxlength="80">
                </div>
                <div class="form-group col-md-8">
                    <label class="label-form" for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" maxlength="80">
                </div>
                <div class="form-group col-md-4">
                    <label class="label-form" for="password">Senha</label>
                    <input type="password" class="form-control" id="password" maxlength="100">
                </div>
                <div class="form-group col-md-4">
                    <label class="label-form" for="passwordConfirm">Confirmação da senha</label>
                    <input type="password" class="form-control" id="passwordConfirm" maxlength="100">
                </div>
                <div class="form-check checkbox">
                    <input class="form-check-input" type="checkbox" id="statusUsers">
                    <label class="label-form checkbox-label" class="form-check-label" for="gridCheck">
                        Ativo/Inativo
                    </label>
                </div>
                <div class="buttons">
                    <button type="submit" class="btn btn-save mr-4">Salvar</button>
                    <a href="#" class="btn btn-cancel">Voltar</a>
                </div>
            </form>
        </div>    
    </div>
    <footer class="footer">
        <span class="footer-details">Desenvolvido por NOME DESENVOLVEDOR</span>
    </footer>
    <script src="/assets/js/jquery-3.5.1.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
</body>
</html>