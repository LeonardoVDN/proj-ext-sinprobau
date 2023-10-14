<?php
$db_host = 'localhost';
$db_nome = 'php_tutorial';
$db_user = 'root';
$db_senha = '';
$conexao = new PDO('mysql:host=localhost;dbname=php_tutorial;charset=utf8', 'root', '');

$query = $conexao->prepare('INSERT INTO tabela_teste (nome, email, telefone, celular) VALUES (:nome, :email, :telefone, :celular)');

$query->bindValue(':nome', $_POST["nome"]);
$query->bindValue(':email', $_POST["email"]);
$query->bindValue(':telefone', $_POST['telefone']);
$query->bindValue(':celular', $_POST['celular']);

$query->execute();

?>