<?php

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
    // Получение объекта PDO
    $pdo = new PDO($dsn, $user, $pass, $opt);

    print_r($_GET);

//    ФИО
    $email = $_GET['email'];
    $password = $_GET['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        echo "Добро пожаловать, " . $user['username'] . "!";

    }else{
        echo "Неверный логин или пароль";
    }

} catch (PDOException $e) {
    die('Подключение не удалось_2: ' . $e->getMessage());
}

?>