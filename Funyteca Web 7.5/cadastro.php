<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_cadastro.css">

    <title>Cadastro</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="images/minionsteca.png" alt="mulher sentada ao lado de um computador">
        </div>
        <div class="form">
            <form action="cadastrar.php" method="POST" id="formulario">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastrar</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="login page.php">Já possui uma conta? Logue aqui!</a></button>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite o nome de usuário">
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite o seu email">
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite a sua senha">
                    </div>

                    <div class="input-box">
                        <label for="Confirmpassword">Confirme sua senha</label>
                        <input id="Confirmpassword" type="password" name="Confirmpassword" placeholder="Digite sua senha novamente">
                    </div>

                </div>

                <div class="continue-button">
                    <button type="submit" id="continue-button"><a href="#">Continuar</a></button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>