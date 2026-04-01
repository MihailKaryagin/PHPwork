<?php
if($_GET != null){

    $id = $_GET["id"];
    $stmt=$pdo->prepare("SELECT * FROM student WHERE id=:id");
    $stmt->bindParam(1,$id);
    $stmt->execute();

    $results=$stmt->fetchAll();
    $result=json_encode($results);
    echo $result;
}else{
    return false;
}
?>
