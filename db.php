<?php

// Conecção com o banco de dados
$host = 'localhost:3306';
$bd = 'atividade';
$user = 'root';
$password = 'Jeni0398@';

$pdo = new PDO("mysql:host=localhost;dbname=atividade", 'root', 'Jeni0398@');

$stmt = $pdo->prepare('INSERT INTO user(nome, email, senha) values(:nome, :email, :senha)');

$stmt->bindParam( ':nome', $name);
$stmt->bindParam( ':email', $email);
$stmt->bindParam( ':senha', $password);

$stmt->execute();
