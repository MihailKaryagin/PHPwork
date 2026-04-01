<?php
if($_POST != NULL){

    $nickname = 'nickname';
    $password = 'password';

    $stmt = $pdo->prepare("INSERT INTO registeredaccounts (nickname, password) VALUES (?,?)");
    $stmt->bindParam(1, $nickname);
    $stmt->bindParam(2, $password);
    $stmt->execute();
}else{
    return false;
}
?>
