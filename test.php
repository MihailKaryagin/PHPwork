<!--<form action="test.php" method="post"  name="testform" id="testform">-->
<!--    <input type="text" name="inp1" id="inp1" />-->
<!--    <input type="text" name="inp2" id="inp2" />-->
<!--    <input type="text" name="inp3" id="inp3" />-->
<!--    <input-->
<!--        type="submit"-->
<!--        name="btn"-->
<!--        id="btn"-->
<!--        value="отправить"-->
<!--    />-->
<!--</form>-->
<?php
// Взаимодействие с front (тстовая)

//echo "Сервер ответил";
echo $_POST["inp1"];
echo " ";
echo $_POST["inp2"];
echo " ";
echo $_POST["inp3"];
//print_r($_POST);
//echo "<br/>";
//print_r($_REQUEST);
//
//
//foreach ($_REQUEST as &$value) {
//    echo $value;
//}
