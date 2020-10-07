<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ HTML::script('css/bootstrap.min');}}
    {{ HTML::script('css/login');}}
    <title>Login Almoxarifado</title>
</head>
<body>
    <img class="bg" src="./assets/img/login-background.jpg" alt="">
    <div class="container">
        <div class="box">
            <img class="login-illustration" src="./assets/img/login-box.png" alt="">
            <form method="post">
                <div class="form-group login">
                    <label for="login-input">Login</label>
                    <input type="text" class="form-control" id="login-input" name="login-input" required>
                </div>
                <div class="form-group password">
                    <label for="password-input">Senha</label>
                    <input type="password" class="form-control" id="password-input" name="password-input" required>
                </div>
                <button type="submit" class="btn btn-login">ENTRAR</button>
            </form>
        </div>
    </div>
</body>
</html>