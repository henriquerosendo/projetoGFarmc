<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionario</title>


    <link rel="stylesheet" href="../estilo/login.css">

    <!-- materialize -->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../js/login.js"> </script>
</head>

<body ng-app="mainModule" ng-controller="mainController">
    <div id="login-page" class="row">
        <div class="col s12 z-depth-6 card-panel">
            <form class="login-form" action="processa_cadastro.php" method="POST">
                <div class="row">
                    <div class="container">
                        <h5>Faça o Cadastro no GFarmc</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input  class="validate" class="email" name="nome_funcionario" type="name">
                        <label for="email" data-error="wrong" data-success="right">digite o seu nome</label>
                    </div>
                </div>


                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">assignment_ind</i>
                        <input  class="validate" class="email" name="matricula_func" type="number">
                        <label for="email" data-error="wrong" data-success="right">Numero da Matricula</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail_outline</i>
                        <input  class="validate" class="email" name="email_funcionario" type="email" required>
                        <label for="email" data-error="wrong" data-success="right">digite seu email</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input  class="validate" class="number" name="cpf_funcionario" type="email" required>
                        <label for="number" data-error="wrong" data-success="right">CPF</label>
                    </div>

                    <div class="input-field col s6">
                        <input  class="validate" class="date" name="data_adm" type="date" required>
                        <label for="email" data-error="wrong" data-success="right">Data de admisao</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input class="password" type="password" required>
                        <label for="password">Senha</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input class="password" name="senha_func" type="password" required>
                        <label for="password">digite novamente a senha</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="submit" value="casdastrar"  class="btn waves-effect waves-light col s12">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 m6 l6">
                        <p class="margin medium-small"><a href="cadastro/cadastro.html">Voltar ao Login </a></p>
                    </div>

                </div>

            </form>
        </div>
    </div>
</body>




</html>