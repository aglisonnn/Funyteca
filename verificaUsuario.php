<?php 
header('Content-Type: application/json');
header('Character-Encoding: utf-8');

$json_entrada = json_decode(file_get_contents('php://input'));
$nome = $json_entrada->{'nome'};
$email = $json_entrada->{'email'};
$senha = $json_entrada -> {'senha'};

try{
    $pdo = new PDO ('mysql:host=localhost;dbname=teste;charset=utf8','root', '');
    echo'conectado com sucesso';
}catch(PDOException $erro){
    echo'conexão deu errado:'.$erro->getMessage();
}

$sql = 'INSERT INTO Usuario (nome,email,senha) VALUES
(:nome, :senha, :email)';

$statement = pdo->prepare($sql);
$statement->bindValue(':nome', $nome );
$statement->bindValue(':email',$email );
$statement->bindValue(':senha',$senha );
$statement->execute();

if($statement->execute()) {
    echo 'Dados inseridos com sucesso!';
}else{
    echo'Deu errado !';
}


?>