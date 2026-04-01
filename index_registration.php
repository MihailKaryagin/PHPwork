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
    $nickname = $_GET['nickname'];
    $password = $_GET['password'];
    $phone = $_GET['phone'];

    $stmt = $pdo->prepare("INSERT INTO registeredaccounts (email,nickname,password,phone) VALUES (?,?,?,?)");
    $stmt->bindParam(1, $email);
    $stmt->bindParam(2, $nickname);
    $stmt->bindParam(3, $password);
    $stmt->bindParam(4, $phone);
    $stmt->execute();

} catch (PDOException $e) {
    die('Подключение не удалось_2: ' . $e->getMessage());
}
?>
