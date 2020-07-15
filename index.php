<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador Farmaceutico</title>

    <link rel="stylesheet" href="estilo/estilo.css">
    <link rel="stylesheet" href="estilo/login.css">

    <!-- materialize -->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/login.js">  </script>

</head>

<body ng-app="mainModule" ng-controller="mainController">
    <div id="login-page" class="row">
        <div class="col s12 z-depth-6 card-panel">
            <form class="login-form">
                <div class="row">
                    <div class="container">
                        Seja Bem Vindo ao GFarmac, por favor entrar com Login e senha!!
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail_outline</i>
                        <input class="validate" id="email" type="email">
                        <label for="email" data-error="wrong" data-success="right">Usuario</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input id="password" type="password">
                        <label for="password">Senha</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m12 l12  login-text">
                        <input type="checkbox" id="remember-me" />
                        <label for="remember-me">Deseja conntinuar na sessao? </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <a href="#" class="btn waves-effect waves-light col s12">Login</a>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 m6 l6">
                        <p class="margin medium-small"><a href="cadastro/cadastro.php">Não possui sua conta cadastrada? faça o cadastro
                                agora!! </a></p>
                    </div>
                    <div class="input-field col s6 m6 l6">
                        <p class="margin right-align medium-small"><a href="">Forgot password?</a></p>
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>


</html>