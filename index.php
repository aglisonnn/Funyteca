<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="assets/images/icon.ico" type="image/x-icon">
    <title>Login form</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="assets/images/cadastro.png" alt="mulher sentada ao lado de um computador">
        </div>  
        <div class="form">
            <form action="backend/login.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Login</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite o seu email">
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite a sua senha">
                    </div>
                </div>

                <div class="login-button">
                    <button type="submit" id="login-button"><a>Entrar</a></button>
                </div>
                <p>Ou</p>
                <div class="cadastro-button">
                    <button><a href="pages/cadastro.php">Cadastre-se</a></button>
                </div>
                </form>
                <div class="forgot-password">
                    <a href="#">Esqueci minha senha</a>
                </div>
        </div>
    </div>
</body>

</html>
