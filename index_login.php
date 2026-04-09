<?php
session_start();
try {
    $host = '127.0.0.1';
    $db = 'ld_shop';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);

    print_r($_POST);

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM registeredaccounts WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && $password === $user['password']) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['nickname'] = $user['nickname'];

        echo "Добро пожаловать, " . $user['nickname'] . "!";
        echo json_encode("Добро пожаловать, " . $user['nickname'] . "!");

    }else{
        echo "Неверный логин или пароль";
    }

} catch (PDOException $e) {
    die('Подключение не удалось_2: ' . $e->getMessage());
}
?>