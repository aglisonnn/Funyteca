<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuario where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['usuario_existe'] == true;
    header('Location: index.php');
    exit; 
}

$sql = "INSERT INTO usuario (nome, email, senha, data_cadastro) VALUES ('$nome', '$email', '$senha', NOW())";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location : cadastro.php');
exit;
?>