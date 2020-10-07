<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ HTML::script('css/bootstrap.min');}}
    {{ HTML::script('css/style');}}
    {{ HTML::script('css/index');}}
    <title>Home</title>
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
        <div class="container entries-notification">
            <div class="row notification-space">
                <div class="card-notification">
                    <div class="title-notification">
                        <h6>Notas Fiscais</h6>
                    </div>
                    <div class="col card-info">
                        <div class="card">
                            <div class="card-body info">
                                <h5 class="card-title">Últimas entradas</h5>
                                <ul>
                                    <li>NF 000000</li>
                                    <li>NF 111111</li>
                                    <li>NF 222222</li>
                                    <li>NF 333333</li>
                                    <li>NF 444444</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-notification">
                    <div class="title-notification">
                        <h6>Produtos</h6>
                    </div>
                    <div class="col card-info">
                        <div class="card">
                            <div class="card-body info">
                                <h5 class="card-title">Últimas entradas</h5>
                                <ul>
                                    <li>Tecido poliéster</li>
                                    <li>Botão 4 furos</li>
                                    <li>Linha branca 40</li>
                                    <li>Tesoura grande</li>
                                    <li>Elástico preto</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-notification">
                    <div class="title-notification">
                        <h6>Categorias</h6>
                    </div>
                    <div class="col card-info">
                        <div class="card">
                            <div class="card-body info">
                                <h5 class="card-title">Últimas entradas</h5>
                                <ul>
                                    <li>Uso e consumo</li>
                                    <li>Sintéticos</li>
                                    <li>Costura</li>
                                    <li>Aviamentos</li>
                                    <li>Químicos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>    
                <img class="home-illustration" src="./assets/img/stacking.png" alt="boxes">           
            </div>
        </div>
        <div class="container">
            <div class="row">                
            </div>
        </div>
    </div>
    <footer class="footer">
        <span class="footer-details">Desenvolvido por NOME DESENVOLVEDOR</span>
    </footer>
    <script src="/assets/js/jquery-3.5.1.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
</body>
</html>