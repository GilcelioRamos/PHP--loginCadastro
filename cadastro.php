<?php

// obtendo os dados do cadastro
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if($password != $password2){
    echo "As senhas não correspondem!";
} else {
    session_start();
    header ('Location: login.html');
      }
        $pdo = new PDO("mysql:host=localhost;dbname=atividade", 'root', 'Jeni0398@');

        $stmt = $pdo->prepare('INSERT INTO user(nome, email, senha) values(:nome, :email, :senha)');

$stmt->bindParam( ':nome', $name);
$stmt->bindParam( ':email', $email);
$stmt->bindParam( ':senha', $password);
$stmt->execute();




