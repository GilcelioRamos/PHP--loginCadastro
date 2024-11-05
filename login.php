<?php

$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO("mysql:host=localhost;dbname=atividade", 'root', 'Jeni0398@');

$stmt = $pdo->prepare("SELECT id, nome, email, senha FROM user WHERE email = :email AND senha = :senha");
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $password);
$stmt->execute();
$userData = $stmt->fetch(PDO::FETCH_ASSOC);

if ($email == $userData['email'] && $password == $userData['senha']){
    session_start();
    $_SESSION['email'] = $userData['email'];
    $_SESSION['id'] = $userData['id'];
        header ("location: content.html");
} else {

    echo 'Login ou senha incorretos!';
}
