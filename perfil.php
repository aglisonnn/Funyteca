<?php
 session_start();
include('conexao.php');
$email = $_SESSION['email'];
$sqlco = "SELECT nome from usuario where email = '$email'";
$result = mysqli_query($conexao, $sqlco) or die("Erro".$mysqli_error($conexao)); 
$rows = $result->fetch_assoc();
$nome = $rows['nome'];
?>

<p><?php echo $email; ?></p>
<p><?php echo $nome; ?></p>