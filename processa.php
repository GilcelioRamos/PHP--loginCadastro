 <?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

$_SESSION['name'] = $name;
$_SESSION['email'] = $email;

$pdo = new PDO ("mysql:host=localhost;dbname=atividade", 'root', 'Jeni0398@');

$stmt = $pdo->prepare("INSERT INTO user(nome, email, senha) values (:name,:email,:password)");

$stmt ->bindParam(':name', $name);
$stmt ->bindParam( ':email', $email);
$stmt ->bindParam( ':password', $password);
$stmt ->bindParam( $password2);
$stmt->execute();

// $_SESSION['email'] = $email;

header("location: login.html");
