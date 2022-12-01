<?php
 session_start();
include('conexao.php');
$email = $_SESSION['email'];
$sqlco = "SELECT nome from usuario where email = '$email'";
$result = mysqli_query($conexao, $sqlco) or die("Erro".$mysqli_error($conexao)); 
$rows = $result->fetch_assoc();
$nome = $rows['nome'];
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <link rel="stylesheet" href="css/perfilcss.css">
    <link rel="preconnect"
        href="https://fonts.gstatic.com">
    <link href=
"https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap"
        rel="stylesheet">
</head>
 
<body>
    <div class="container">
        <div class="user-image">
            <img src="images/funnytecca_logo.png" alt="this image contains user-image">
        </div>
 
        <div class="content">
            <h3 class="name"><?php echo $nome; ?></h3>
            <p class="username"><?php echo $email; ?></p>
 
 
            <div class="links">
                <a>
                </a>
 
                <a>
                </a>
 
                <a>
                </a>
                 
                <a>
                </a>
            </div>
 
            <p class="details">
                "Educação é a base da vida"
            </p>
 
 
            <a class="effect effect-4" href="homepage.php">
                Voltar
            </a>
        </div>
    </div>
     
    
</body>
 
</html>